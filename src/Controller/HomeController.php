<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/', name: 'app_home')]
    public function index(
        Request $request,
        MailerInterface $mailer,
        EntityManagerInterface $manager,
    ): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){

            $manager->persist($contact);
            $manager->flush();

            $email = (new Email())
                ->from($contact->getEmail())
                ->to('pcclimroyan@gmail.com')
                ->subject('Vous avez un nouveau message de ' . $contact->getFirstname() . ' ' . $contact->getLastname())
                ->html($this->renderView('mail/emails.html.twig', ['contact' => $contact]));

            $mailer->send($email);

            $this->addFlash(
                'success',
                'Votre message à été envoyé avec succès. Nous vous contacterons le plus rapidement possible.'
            );


            return $this->redirectToRoute('app_home');

        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'contact' => Contact::class,
            'form' => $form->createView()
        ]);
    }
}