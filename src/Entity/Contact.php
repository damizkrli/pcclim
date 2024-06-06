<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: false)]
    #[Assert\NotBlank]
    private ?string $firstname = null;

    #[ORM\Column(length: 100, nullable: false)]
    #[Assert\NotBlank]
    private ?string $lastname = null;

    #[ORM\Column(length: 255, nullable: false)]
    #[Assert\NotBlank]
    private ?string $address = null;

    #[ORM\Column(length: 100, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(nullable: false)]
    #[Assert\NotBlank]
    private ?string $phone = null;

    #[ORM\Column(type: Types::TEXT, nullable: false)]
    #[Assert\NotBlank]
    private ?string $message = null;

    #[ORM\Column]
    #[Assert\NotNull]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column]
    private ?int $postalCode = null;

    #[ORM\Column(length: 100)]
    private ?string $city = null;

    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $cleanFirstname = preg_replace('/[^a-zA-Z0-9]/', '', $firstname);

        $this->firstname = htmlspecialchars(ucfirst(strtolower(trim($cleanFirstname))));

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $cleanLastname = preg_replace('/[^a-zA-Z0-9]/', '', $lastname);

        $this->lastname = htmlspecialchars(ucfirst(strtolower(trim($lastname))));

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $cleanAddress = preg_replace('/[^a-zA-Z0-9]/', '', $address);

        $this->address = ucwords(strtolower($address));

        return $this;

    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = (strtolower(trim($email)));

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = htmlspecialchars(trim($phone));

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = htmlspecialchars(ucfirst(strtolower(trim($message))));

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postalCode;
    }

    public function setPostalCode(int $postalCode): self
    {
        $this->postalCode = trim(htmlspecialchars($postalCode));

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = trim(htmlspecialchars(ucwords(strtolower($city))));

        return $this;
    }
}
