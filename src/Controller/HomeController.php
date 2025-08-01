<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Dto\ContactData;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class HomeController extends AbstractController
{
    /**
     * @throws TransportExceptionInterface
     */
    #[Route('/', name: 'app_home')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class, new ContactData());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            /** @var ContactData $data */
            $data = $form->getData();
            
            $email = (new Email())
                ->from($data->email)
                ->to('pcclimroyan@gmail.com')
                ->subject('Nouveau message de ' . $data->firstname . ' ' . $data->lastname)
                ->html($this->renderView('mail/emails.html.twig', ['contact' => $data]));

            $mailer->send($email);

            $this->addFlash('success', 'Votre message a bien été envoyé !');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('home/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
