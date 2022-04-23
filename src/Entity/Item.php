<?php

namespace App\Entity;

use App\Repository\ItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemRepository::class)
 */
class Item
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name_item;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $url_img_item;

    /**
     * @ORM\Column(type="integer")
     */
    private $price_item;

    /**
     * @ORM\Column(type="text")
     */
    private $description_item;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_item;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameItem(): ?string
    {
        return $this->name_item;
    }

    public function setNameItem(string $name_item): self
    {
        $this->name_item = $name_item;

        return $this;
    }

    public function getUrlImgItem(): ?string
    {
        return $this->url_img_item;
    }

    public function setUrlImgItem(string $url_img_item): self
    {
        $this->url_img_item = $url_img_item;

        return $this;
    }

    public function getPriceItem(): ?int
    {
        return $this->price_item;
    }

    public function setPriceItem(int $price_item): self
    {
        $this->price_item = $price_item;

        return $this;
    }

    public function getDescriptionItem(): ?string
    {
        return $this->description_item;
    }

    public function setDescriptionItem(string $description_item): self
    {
        $this->description_item = $description_item;

        return $this;
    }

    public function getIdItem(): ?string
    {
        return $this->id_item;
    }

    public function setIdItem(string $id_item): self
    {
        $this->id_item = $id_item;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }
}
