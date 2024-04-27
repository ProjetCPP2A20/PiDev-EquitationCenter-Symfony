<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "medicalvisit", indexes: [
    new ORM\Index(name: "medicalvisit_ibfk_1", columns: ["idHorse"]),
    new ORM\Index(name: "medicalvisit_ibfk_2", columns: ["idVet"])
])]
#[ORM\Entity]
class Medicalvisit
{
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "Description", type: "text", length: 65535, nullable: true, options: ["default" => null])]
    private ?string $description = null;

    #[ORM\Column(name: "VisitDate", type: "date", nullable: true, options: ["default" => null])]
    private ?\DateTimeInterface $visitdate = null;

    #[ORM\ManyToOne(targetEntity: Horse::class)]
    #[ORM\JoinColumn(name: "idHorse", referencedColumnName: "id")]
    private ?Horse $idhorse = null;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: "idVet", referencedColumnName: "id")]
    private ?Users $idvet = null;

    // Getters and setters...

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getVisitdate(): ?\DateTimeInterface
    {
        return $this->visitdate;
    }

    public function setVisitdate(?\DateTimeInterface $visitdate): self
    {
        $this->visitdate = $visitdate;
        return $this;
    }

    public function getIdhorse(): ?Horse
    {
        return $this->idhorse;
    }

    public function setIdhorse(?Horse $idhorse): self
    {
        $this->idhorse = $idhorse;
        return $this;
    }

    public function getIdvet(): ?Users
    {
        return $this->idvet;
    }

    public function setIdvet(?Users $idvet): self
    {
        $this->idvet = $idvet;
        return $this;
    }
}
