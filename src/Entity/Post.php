<?php

namespace App\Entity;

use App\{Repository\PostRepository};
use Doctrine\ORM\Mapping as ORM;
use DateTimeInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;

use Doctrine\Common\Collections\ArrayCollection;


#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "le champ est vide")]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "le champ est vide")]
    private ?string $Description = null;

    #[ORM\Column]
    private ?String $Date = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\OneToMany(targetEntity: Commentaire::class, mappedBy: 'post')]
    private Collection $commentaires;
    #[ORM\ManyToOne(targetEntity: Users::class,inversedBy:"post")]
    #[ORM\JoinColumn(name: 'userid', referencedColumnName: 'id')]
    private ?Users $user = null;
    public function __construct()
    {
        $this->commentaires = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->Date;
    }

    public function setDate(?string $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }


    /**
     * @return Collection|Commentaire[]
     */
    public function getCommentaires(): Collection
    {
        return $this->commentaires;
    }

    public function addCommentaire(Commentaire $commentaire): self
    {
        if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[] = $commentaire;
            $commentaire->setPost($this);
        }

        return $this;
    }

    public function removeCommentaire(Commentaire $commentaire): self
    {
        if ($this->commentaires->removeElement($commentaire)) {
            // set the owning side to null (unless already changed)
            if ($commentaire->getPost() === $this) {
                $commentaire->setPost(null);
            }
        }

        return $this;
    }
    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }
}
