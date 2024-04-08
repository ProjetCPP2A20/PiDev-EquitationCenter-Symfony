<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\BlobType;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: "activity")]
#[ORM\Entity]
class Activity
{
    #[ORM\Column(name: "id", type: "integer", nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    private $id;

    #[ORM\Column(name: "Date", type: "date", nullable: false)]
    private \DateTime $date;

    #[ORM\Column(name: "TypeActivity", type: "string", length: 255, nullable: false)]
    private string $typeactivity;

    #[ORM\Column(name: "Title", type: "string", length: 255, nullable: false)]
    private string $title;

    #[ORM\Column(name: "Description", type: "string", length: 255, nullable: false)]
    private string $description;

    #[ORM\Column(name: "price", type: "integer", nullable: false)]
    private int $price;

    #[ORM\Column(name: "ImageData", type: "blob", nullable: false)]
    private $imagedata;

    #[ORM\ManyToMany(targetEntity: Horse::class, mappedBy: "activity")]
   private Collection $horse;

    public function __construct()
    {
        $this->horse = new ArrayCollection();
    }

    public function getHorse(): ArrayCollection
    {
        return $this->horse;
    }

    public function setHorse(ArrayCollection $horse): void
    {
        $this->horse = $horse;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    public function getTypeactivity(): string
    {
        return $this->typeactivity;
    }

    public function setTypeactivity(string $typeactivity): void
    {
        $this->typeactivity = $typeactivity;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
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

}
