<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "horse")]
#[ORM\Entity]
class Horse
{
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "Name", type: "string", length: 255, nullable: false)]
    private string $name;

    #[ORM\Column(name: "DatePension", type: "date", nullable: false)]
    private \DateTimeInterface $datepension;

    #[ORM\Column(name: "Breed", type: "string", length: 255, nullable: false)]
    private string $breed;

    #[ORM\Column(name: "IsAvailable", type: "boolean", nullable: false)]
    private bool $isavailable;

    #[ORM\ManyToMany(targetEntity: Activity::class, inversedBy: "horse")]
    #[ORM\JoinTable(name: "horseactivity",
        joinColumns: [new ORM\JoinColumn(name: "horse_id", referencedColumnName: "id")],
        inverseJoinColumns: [new ORM\JoinColumn(name: "activity_id", referencedColumnName: "id")]
    )]
    private Collection $activity;

    public function __construct()
    {
        $this->activity = new ArrayCollection();
    }

    // Getters and setters...
    public function getId(): ?int
    {
        return $this->id;
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

    public function getDatePension(): ?\DateTimeInterface
    {
        return $this->datepension;
    }

    public function setDatePension(\DateTimeInterface $datepension): self
    {
        $this->datepension = $datepension;

        return $this;
    }

    public function getBreed(): ?string
    {
        return $this->breed;
    }

    public function setBreed(string $breed): self
    {
        $this->breed = $breed;

        return $this;
    }

    public function isIsAvailable(): ?bool
    {
        return $this->isavailable;
    }

    public function setIsAvailable(bool $isavailable): self
    {
        $this->isavailable = $isavailable;

        return $this;
    }

    public function getActivity(): Collection
    {
        return $this->activity;
    }

    public function addActivity(Activity $activity): self
    {
        if (!$this->activity->contains($activity)) {
            $this->activity->add($activity);
        }

        return $this;
    }

    public function removeActivity(Activity $activity): self
    {
        $this->activity->removeElement($activity);

        return $this;
    }
}
