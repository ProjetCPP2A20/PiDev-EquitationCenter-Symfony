<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\PasswordStrength;


#[ORM\Table(name: "users")]
#[ORM\Entity]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
  #[ORM\Column(name: "id", type: "integer", nullable: false)]
  #[ORM\Id]
  #[ORM\GeneratedValue(strategy: "IDENTITY")]
  private ?int $id = null;

  #[ORM\Column(name: "email", type: "string", length: 255,unique: true,nullable: false)]
  #[Assert\Email(
    message: ' email {{ value }} non valide.',
  )]
  #[Assert\NotBlank(message: "email est requis")]
  private string $email;


  #[ORM\Column(name: "password", type: "string", length: 255, nullable: true, options: ["default" => null])]
  #[Assert\NotBlank (message: "Le mot de passe est requis")]
  #[Assert\PasswordStrength([ 'minScore' => PasswordStrength::STRENGTH_VERY_STRONG, 'message' => 'Votre mot de passe doit comporter au moins 8 caractères, 1 chiffre, 1 lettre majuscule, 1 lettre minuscule et 1 caractère spécial'
  ])]
// #[RollerworksPassword\PasswordStrength(minLength=7, minStrength=3)]
 // #[Assert\Length(
   // min: 8,
  //  minMessage: 'Votre mot de passe doit comporter au moins {{ limit }} caractères',
  //)]
  private ?string $password = null;

  #[ORM\Column(name: "name", type: "string", length: 255, nullable: false)]
  #[Assert\NotBlank (message: "nom est requis")]
  #[Assert\Regex(
    pattern: '/\d/',
    message: 'Votre prénom ne peut pas contenir de chiffre',
    match: false,
  )]
  private string $name;

  //#[ORM\Column(name: "roles", type: "string", length: 50, nullable: false)]
  //#[Assert\NotBlank(message: "le role est requis")]
  //private string $role;
  #[ORM\Column]
  private array $roles = [];

  #[ORM\Column(name: "lastname", type: "string", length: 255, nullable: false)]
  #[Assert\NotBlank(message: "prénom est requis")]
  #[Assert\Regex(
    pattern: '/\d/',
    message: 'Votre nom ne peut pas contenir de chiffre',
    match: false,
  )]
  private string $lastname;

  #[ORM\Column(name: "address", type: "string", length: 255, nullable: false)]
  #[Assert\NotBlank(message: "le champ est vide")]
  private string $address;

  #[ORM\Column(name: "num_tel", type: "string", length: 255, nullable: false)]
  #[Assert\NotBlank(message: "le champ est vide")]
  #[Assert\Regex(
    pattern: '/^[0-9]{8}\d*$/',
    message: 'Le numéro de téléphone doit être composé de 8 chiffres',
    match: true,
  )]

  private string $numTel;

  #[ORM\Column(name: "imageData", type: "blob", length: 16777215, nullable: false)]
  #[Assert\NotBlank(message: "image requis")]
  private $imagedata;


 // #[ORM\Column(type: "boolean", options: ['default' => false])]
 // private ?bool $isVerified = false;
  #[ORM\Column(type: 'boolean')]
  private $isVerified = false;
  #[ORM\Column(name: "salt", type: "binary", nullable: false)]
  private $salt;

  #[ORM\Column(name: "dateJoined", type: "date", nullable: false)]
  #[Assert\NotBlank(message: "Date requis")]
  private \DateTime $datejoined;



  // Getters and setters...

  public function getId(): ?int
  {
    return $this->id;
  }
  public function setId(int $id)
  {
    $this->id=$id;
  }

  public function getEmail(): ?string
  {
    return $this->email;
  }

  public function setEmail(string $email): self
  {
    $this->email = $email;
    return $this;
  }

  public function getPassword(): ?string
  {
    return $this->password;
  }

  public function setPassword(?string $password): self
  {
    $this->password = $password;
    return $this;
  }

  public function getName(): ?string
  {
    return $this->name;
  }

  public function setName(string $name): self
  {
    $this->name = $name;
    return $this;
  }

//  public function getRole(): ?string
  // {
  // return $this->role;
  // }

  //public function setRole(string $role): self
  //{
  // $this->role = $role;
  // return $this;
  // }

  public function getLastname(): ?string
  {
    return $this->lastname;
  }

  public function setLastname(string $lastname): self
  {
    $this->lastname = $lastname;
    return $this;
  }

  public function getAddress(): ?string
  {
    return $this->address;
  }

  public function setAddress(string $address): self
  {
    $this->address = $address;
    return $this;
  }

  public function getNumTel(): ?string
  {
    return $this->numTel;
  }

  public function setNumTel(string $numTel): self
  {
    $this->numTel = $numTel;
    return $this;
  }

  public function getImagedata()
  {
    if (is_resource($this->imagedata)) {
      rewind($this->imagedata);
      $data = stream_get_contents($this->imagedata);
      return base64_encode($data);
    }
    return $this->imagedata;
  }

  public function setImagedata($imagedata): void
  {
    if (strpos($imagedata, 'data:image') === 0) {
      // Extract the base64 encoded data from the data URI
      $base64Data = substr($imagedata, strpos($imagedata, ',') + 1);
      // Decode the base64 data
      $binaryData = base64_decode($base64Data);
      // Set the binary data to the entity's property
      $this->imagedata = $binaryData;
    } else {
      // If the provided data is already binary, set it directly
      $this->imagedata = $imagedata;
    }
  }




  public function getSalt()
  {
    return $this->salt;
  }

  public function setSalt($salt): self
  {
    $this->salt = $salt;
    return $this;
  }

  public function getDatejoined(): ?\DateTime
  {
    return $this->datejoined;
  }

  public function setDatejoined(\DateTime $datejoined): void
  {
    $this->datejoined = $datejoined;

  }

  public function jsonSerialize()
  {
    return [
      'id' => $this->getId(),
      'email' => $this->getEmail(),
      'password' => $this->getPassword(),
      'name' => $this->getName(),
      'role' => $this->getRole(),
      'lastname' => $this->getLastname(),
      'address' => $this->getAddress(),
      'numTel' => $this->getNumTel(),
      'imagedata' => $this->getImagedata(),
      'datejoined' => $this->getDatejoined()->format('Y-m-d'),
    ];
  }

  public function getRoles(): array
  {
    $roles = $this->roles;
    // guarantee every user at least has ROLE_USER
    $roles[] = 'ROLE_USER';

    return array_unique($roles);
  }

  public function setRoles(array $roles): static
  {
    $this->roles = $roles;

    return $this;
  }

  public function eraseCredentials()
  {
    // TODO: Implement eraseCredentials() method.
  }

  public function getUserIdentifier(): string
  {
    return (string) $this->email;
  }


    public function __toString(): string
    {
        return $this->email;
    }

    public function getUsername(): string
  {
    return (string) $this->email;
  }

  public function __call(string $name, array $arguments)
  {
    // TODO: Implement @method string getUserIdentifier()
  }

  public function isVerified(): bool
  {
      return $this->isVerified;
  }

  public function setIsVerified(bool $isVerified): static
  {
      $this->isVerified = $isVerified;

      return $this;
  }
}


