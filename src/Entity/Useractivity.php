<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "useractivity", indexes: [
    new ORM\Index(name: "UserId", columns: ["UserId"]),
    new ORM\Index(name: "activityId", columns: ["ActivityId"])
])]
#[ORM\Entity]
class Useractivity
{
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "Feedback", type: "string", length: 255, nullable: true)]
    private ?string $feedback = null;

    #[ORM\Column(name: "Stars", type: "integer", nullable: true)]
    private int $stars;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: "UserId", referencedColumnName: "id")]
    private ?Users $userid = null;

    #[ORM\ManyToOne(targetEntity: Activity::class)]
    #[ORM\JoinColumn(name: "ActivityId", referencedColumnName: "id")]
    private ?Activity $activityid = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $feedbackDate = null;

    // Getters and setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFeedback(): ?string
    {
        return $this->feedback;
    }

    public function setFeedback(string $feedback): self
    {
        $this->feedback = $feedback;
        return $this;
    }

    public function getStars(): ?int
    {
        return $this->stars;
    }

    public function setStars(int $stars): self
    {
        $this->stars = $stars;
        return $this;
    }

    public function getUserid(): ?Users
    {
        return $this->userid;
    }

    public function setUserid(?Users $userid): self
    {
        $this->userid = $userid;
        return $this;
    }

    public function getActivityid(): ?Activity
    {
        return $this->activityid;
    }

    public function setActivityid(?Activity $activityid): self
    {
        $this->activityid = $activityid;
        return $this;
    }

    public function getFeedbackDate(): ?\DateTimeInterface
    {
        return $this->feedbackDate;
    }

    public function setFeedbackDate(?\DateTimeInterface $feedbackDate): static
    {
        $this->feedbackDate = $feedbackDate;

        return $this;
    }
}
