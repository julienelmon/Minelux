<?php

namespace App\Entity;

use App\Repository\FriendRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FriendRepository::class)
 */
class Friend
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
    private $Player1;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $Player2;

    /**
     * @ORM\Column(type="boolean")
     */
    private $is_valided;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayer1(): ?string
    {
        return $this->Player1;
    }

    public function setPlayer1(string $Player1): self
    {
        $this->Player1 = $Player1;

        return $this;
    }

    public function getPlayer2(): ?User
    {
        return $this->Player2;
    }

    public function setPlayer2(?User $Player2): self
    {
        $this->Player2 = $Player2;

        return $this;
    }

    public function getIsValided(): ?bool
    {
        return $this->is_valided;
    }

    public function setIsValided(bool $is_valided): self
    {
        $this->is_valided = $is_valided;

        return $this;
    }
}
