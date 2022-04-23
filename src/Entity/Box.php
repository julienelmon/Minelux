<?php

namespace App\Entity;

use App\Repository\BoxRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BoxRepository::class)
 */
class Box
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $link_img;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $text1;

    /**
     * @ORM\Column(type="text")
     */
    private $text2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $text3;

    /**
     * @ORM\Column(type="string", length=2000)
     */
    private $link_web;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $colortext;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fontsize;

    /**
     * @ORM\Column(type="integer")
     */
    private $line;

    /**
     * @ORM\Column(type="integer")
     */
    private $row;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLinkImg(): ?string
    {
        return $this->link_img;
    }

    public function setLinkImg(string $link_img): self
    {
        $this->link_img = $link_img;

        return $this;
    }

    public function getText1(): ?string
    {
        return $this->text1;
    }

    public function setText1(?string $text1): self
    {
        $this->text1 = $text1;

        return $this;
    }

    public function getText2(): ?string
    {
        return $this->text2;
    }

    public function setText2(string $text2): self
    {
        $this->text2 = $text2;

        return $this;
    }

    public function getText3(): ?string
    {
        return $this->text3;
    }

    public function setText3(?string $text3): self
    {
        $this->text3 = $text3;

        return $this;
    }

    public function getLinkWeb(): ?string
    {
        return $this->link_web;
    }

    public function setLinkWeb(string $link_web): self
    {
        $this->link_web = $link_web;

        return $this;
    }

    public function getColortext(): ?string
    {
        return $this->colortext;
    }

    public function setColortext(?string $colortext): self
    {
        $this->colortext = $colortext;

        return $this;
    }

    public function getFontsize(): ?int
    {
        return $this->fontsize;
    }

    public function setFontsize(?int $fontsize): self
    {
        $this->fontsize = $fontsize;

        return $this;
    }

    public function getLine(): ?int
    {
        return $this->line;
    }

    public function setLine(int $line): self
    {
        $this->line = $line;

        return $this;
    }

    public function getRow(): ?int
    {
        return $this->row;
    }

    public function setRow(int $row): self
    {
        $this->row = $row;

        return $this;
    }
}
