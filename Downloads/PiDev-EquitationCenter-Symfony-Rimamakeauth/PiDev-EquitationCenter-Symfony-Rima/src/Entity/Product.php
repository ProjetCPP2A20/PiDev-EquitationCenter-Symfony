<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "product")]
#[ORM\Entity]
class Product
{
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "Name", type: "string", length: 20, nullable: false)]
    private string $name;

    #[ORM\Column(name: "price", type: "float", precision: 10, scale: 0, nullable: false)]
    private float $price;

    #[ORM\Column(name: "Description", type: "string", length: 30, nullable: false)]
    private string $description;

    #[ORM\Column(name: "Stockqty", type: "integer", nullable: false)]
    private int $stockqty;

    #[ORM\Column(name: "BlobImage", type: "blob", length: 65535, nullable: false)]
    private $blobimage;


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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getStockqty(): ?int
    {
        return $this->stockqty;
    }

    public function setStockqty(int $stockqty): self
    {
        $this->stockqty = $stockqty;
        return $this;
    }

    public function getBlobimage()
    {
        return $this->blobimage;
    }

    public function setBlobimage($blobimage): self
    {
        $this->blobimage = $blobimage;
        return $this;
    }
}
