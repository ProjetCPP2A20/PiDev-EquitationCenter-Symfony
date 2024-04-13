<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "complaint")]
#[ORM\Entity]
class Complaint
{
    #[ORM\Id]
    #[ORM\Column(type: "integer", nullable: false)]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private int $id;

    #[ORM\Column(type: "integer", nullable: true, options: ["default" => null])]
    private ?int $userId = null;

    #[ORM\Column(type: "string", length: 255, nullable: true, options: ["default" => null])]
    private ?string $objet = null;

    #[ORM\Column(type: "text", length: 65535, nullable: true, options: ["default" => null])]
    private ?string $description = null;

    #[ORM\Column(type: "date", nullable: true, options: ["default" => null])]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: "string", length: 50, nullable: true, options: ["default" => null])]
    private ?string $etat = null;

    #[ORM\Column(type: "string", length: 255, nullable: true, options: ["default" => null])]
    private ?string $answer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(?string $objet): static
    {
        $this->objet = $objet;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): static
    {
        $this->answer = $answer;

        return $this;
    }
}
