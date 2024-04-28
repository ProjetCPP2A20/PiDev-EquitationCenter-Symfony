<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use App\Entity\Users;

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
    #[Assert\NotBlank]
    #[Assert\Positive]
    private float $price = 0;

    #[ORM\Column(name: "qty", type: "integer", nullable: false)]
    #[Assert\NotBlank]
    #[Assert\PositiveOrZero]
    private int $qty = 0;

    #[ORM\Column(name: "status", type: "string", length: 255, nullable: false)]
    #[Assert\NotBlank]
    private string $status = "";

    #[ORM\Column(name: "total_price", type: "float", precision: 10, scale: 0, nullable: false)]
    #[Assert\NotBlank]
    #[Assert\Positive]
    private float $totalPrice = 1;

    #[ORM\ManyToOne(targetEntity: Product::class)]
    #[ORM\JoinColumn(name: "product_id")]
    private $productId ;

    #[ORM\ManyToOne(targetEntity: Users::class)]
    #[ORM\JoinColumn(name: "id_client")]
    private $idClient;


    public function getIdClient(): ?Users
    {
        return $this->idClient;
    }

    public function setIdClient(?Users $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


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

    public function setStatus(string $status)
    {
        $this->status = $status;
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

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }






}
