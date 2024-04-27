<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "product_order", indexes: [
    new ORM\Index(name: "product_id", columns: ["product_id"]),
    new ORM\Index(name: "fk_client_id", columns: ["id_client"])
])]
#[ORM\Entity]
class ProductOrder
{
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private ?int $id = null;

    #[ORM\Column(name: "price", type: "float", precision: 10, scale: 0, nullable: false)]
    private float $price;

    #[ORM\Column(name: "qty", type: "integer", nullable: false)]
    private int $qty;

    #[ORM\Column(name: "status", type: "string", length: 255, nullable: false)]
    private string $status;

    #[ORM\Column(name: "total_price", type: "float", precision: 10, scale: 0, nullable: false)]
    private float $totalPrice;

    #[ORM\Column(name: "product_id", type: "integer", nullable: false)]
    private int $productId;

    #[ORM\Column(name: "id_client", type: "integer", nullable: true, options: ["default" => null])]
    private ?int $idClient = null;

    // Getters and setters...

    public function getId(): ?int
    {
        return $this->id;
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

    public function getQty(): ?int
    {
        return $this->qty;
    }

    public function setQty(int $qty): self
    {
        $this->qty = $qty;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getTotalPrice(): ?float
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(float $totalPrice): self
    {
        $this->totalPrice = $totalPrice;
        return $this;
    }

    public function getProductId(): ?int
    {
        return $this->productId;
    }

    public function setProductId(int $productId): self
    {
        $this->productId = $productId;
        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): self
    {
        $this->idClient = $idClient;
        return $this;
    }
}
