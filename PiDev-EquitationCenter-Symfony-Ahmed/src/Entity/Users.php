<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "users")]
#[ORM\Entity]
class Users
{
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "email", type: "string", length: 255, nullable: false)]
    private string $email;

    #[ORM\Column(name: "password", type: "string", length: 255, nullable: true, options: ["default" => null])]
    private ?string $password = null;

    #[ORM\Column(name: "name", type: "string", length: 255, nullable: false)]
    private string $name;

    #[ORM\Column(name: "roles", type: "string", length: 50, nullable: false)]
    private string $role;

    #[ORM\Column(name: "lastname", type: "string", length: 255, nullable: false)]
    private string $lastname;

    #[ORM\Column(name: "address", type: "string", length: 255, nullable: false)]
    private string $address;

    #[ORM\Column(name: "num_tel", type: "string", length: 255, nullable: false)]
    private string $numTel;

    #[ORM\Column(name: "imageData", type: "blob", length: 16777215, nullable: false)]
    private $imagedata;

    #[ORM\Column(name: "hash", type: "string", length: 255, nullable: false)]
    private string $hash;

    #[ORM\Column(name: "salt", type: "binary", nullable: false)]
    private $salt;

    #[ORM\Column(name: "dateJoined", type: "date", nullable: false)]
    private \DateTimeInterface $datejoined;

    // Getters and setters...

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;
        return $this;
    }

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
        return $this->imagedata;
    }

    public function setImagedata($imagedata): self
    {
        $this->imagedata = $imagedata;
        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;
        return $this;
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

    public function getDatejoined(): ?\DateTimeInterface
    {
        return $this->datejoined;
    }

    public function setDatejoined(\DateTimeInterface $datejoined): self
    {
        $this->datejoined = $datejoined;
        return $this;
    }
    public function __toString(): string
    {
        return $this->name;
    }
}
