<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $create_at;

    /**
     * @ORM\Column(type="integer")
     */
    private $is_read;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $from_user;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $to_user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getCreateAt(): ?\DateTimeInterface
    {
        return $this->create_at;
    }

    public function setCreateAt(\DateTimeInterface $create_at): self
    {
        $this->create_at = $create_at;

        return $this;
    }

    public function getIsRead(): ?int
    {
        return $this->is_read;
    }

    public function setIsRead(int $is_read): self
    {
        $this->is_read = $is_read;

        return $this;
    }

    public function getFromUser(): ?string
    {
        return $this->from_users;
    }

    public function setFromUser(string $from_users): self
    {
        $this->from_user = $from_users;

        return $this;
    }

    public function getToUser(): ?User
    {
        return $this->to_user;
    }

    public function setToUser(User $to_user): self
    {
        $this->to_user = $to_user;

        return $this;
    }
}
