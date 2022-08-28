<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $lastname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $experience;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $health;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $feed;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $uuid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_10;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_11;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_12;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_13;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_14;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_15;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_16;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_17;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_18;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_19;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_20;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_21;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_22;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_23;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_24;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_25;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_26;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_27;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_28;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_29;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_30;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_31;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_32;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_33;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_34;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_35;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_36;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $armor_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $armor_2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $armor_3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $armor_4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $inventory_special;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_1_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_2_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_3_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_5_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_4_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_6_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_7_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_8_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_9_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_10_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_11_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_12_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_13_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_14_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_15_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_16_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_17_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_18_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_19_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_20_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_21_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_22_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_23_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_24_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_25_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_26_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_27_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_28_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_29_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_30_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_31_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_32_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_33_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_34_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_35_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_36_count;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inventory_special_count;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstname;
    }


    public function setFirstName(string $firstname): self
    {
        $this->firstname = $firstname;
        
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastname;
    }

    public function setLastName(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }
    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getHealth(): ?string
    {
        return $this->health;
    }

    public function setHealth(?string $health): self
    {
        $this->health = $health;

        return $this;
    }

    public function getFeed(): ?string
    {
        return $this->feed;
    }

    public function setFeed(?string $feed): self
    {
        $this->feed = $feed;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(?string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getInventory1(): ?string
    {
        return $this->inventory_1;
    }

    public function setInventory1(?string $inventory_1): self
    {
        $this->inventory_1 = $inventory_1;

        return $this;
    }

    public function getInventory2(): ?string
    {
        return $this->inventory_2;
    }

    public function setInventory2(?string $inventory_2): self
    {
        $this->inventory_2 = $inventory_2;

        return $this;
    }

    public function getInventory3(): ?string
    {
        return $this->inventory_3;
    }

    public function setInventory3(?string $inventory_3): self
    {
        $this->inventory_3 = $inventory_3;

        return $this;
    }

    public function getInventory4(): ?string
    {
        return $this->inventory_4;
    }

    public function setInventory4(string $inventory_4): self
    {
        $this->inventory_4 = $inventory_4;

        return $this;
    }

    public function getInventory5(): ?string
    {
        return $this->inventory_5;
    }

    public function setInventory5(?string $inventory_5): self
    {
        $this->inventory_5 = $inventory_5;

        return $this;
    }

    public function getInventory6(): ?string
    {
        return $this->inventory_6;
    }

    public function setInventory6(?string $inventory_6): self
    {
        $this->inventory_6 = $inventory_6;

        return $this;
    }

    public function getInventory7(): ?string
    {
        return $this->inventory_7;
    }

    public function setInventory7(?string $inventory_7): self
    {
        $this->inventory_7 = $inventory_7;

        return $this;
    }

    public function getInventory8(): ?string
    {
        return $this->inventory_8;
    }

    public function setInventory8(?string $inventory_8): self
    {
        $this->inventory_8 = $inventory_8;

        return $this;
    }

    public function getInventory9(): ?string
    {
        return $this->inventory_9;
    }

    public function setInventory9(?string $inventory_9): self
    {
        $this->inventory_9 = $inventory_9;

        return $this;
    }

    public function getInventory10(): ?string
    {
        return $this->inventory_10;
    }

    public function setInventory10(?string $inventory_10): self
    {
        $this->inventory_10 = $inventory_10;

        return $this;
    }

    public function getInventory11(): ?string
    {
        return $this->inventory_11;
    }

    public function setInventory11(?string $inventory_11): self
    {
        $this->inventory_11 = $inventory_11;

        return $this;
    }

    public function getInventory12(): ?string
    {
        return $this->inventory_12;
    }

    public function setInventory12(?string $inventory_12): self
    {
        $this->inventory_12 = $inventory_12;

        return $this;
    }

    public function getInventory13(): ?string
    {
        return $this->inventory_13;
    }

    public function setInventory13(?string $inventory_13): self
    {
        $this->inventory_13 = $inventory_13;

        return $this;
    }

    public function getInventory14(): ?string
    {
        return $this->inventory_14;
    }

    public function setInventory14(?string $inventory_14): self
    {
        $this->inventory_14 = $inventory_14;

        return $this;
    }

    public function getInventory15(): ?string
    {
        return $this->inventory_15;
    }

    public function setInventory15(?string $inventory_15): self
    {
        $this->inventory_15 = $inventory_15;

        return $this;
    }

    public function getInventory16(): ?string
    {
        return $this->inventory_16;
    }

    public function setInventory16(?string $inventory_16): self
    {
        $this->inventory_16 = $inventory_16;

        return $this;
    }

    public function getInventory17(): ?string
    {
        return $this->inventory_17;
    }

    public function setInventory17(?string $inventory_17): self
    {
        $this->inventory_17 = $inventory_17;

        return $this;
    }

    public function getInventory18(): ?string
    {
        return $this->inventory_18;
    }

    public function setInventory18(?string $inventory_18): self
    {
        $this->inventory_18 = $inventory_18;

        return $this;
    }

    public function getInventory19(): ?string
    {
        return $this->inventory_19;
    }

    public function setInventory19(?string $inventory_19): self
    {
        $this->inventory_19 = $inventory_19;

        return $this;
    }

    public function getInventory20(): ?string
    {
        return $this->inventory_20;
    }

    public function setInventory20(?string $inventory_20): self
    {
        $this->inventory_20 = $inventory_20;

        return $this;
    }

    public function getInventory21(): ?string
    {
        return $this->inventory_21;
    }

    public function setInventory21(?string $inventory_21): self
    {
        $this->inventory_21 = $inventory_21;

        return $this;
    }

    public function getInventory22(): ?string
    {
        return $this->inventory_22;
    }

    public function setInventory22(?string $inventory_22): self
    {
        $this->inventory_22 = $inventory_22;

        return $this;
    }

    public function getInventory23(): ?string
    {
        return $this->inventory_23;
    }

    public function setInventory23(?string $inventory_23): self
    {
        $this->inventory_23 = $inventory_23;

        return $this;
    }

    public function getInventory24(): ?string
    {
        return $this->inventory_24;
    }

    public function setInventory24(?string $inventory_24): self
    {
        $this->inventory_24 = $inventory_24;

        return $this;
    }

    public function getInventory25(): ?string
    {
        return $this->inventory_25;
    }

    public function setInventory25(?string $inventory_25): self
    {
        $this->inventory_25 = $inventory_25;

        return $this;
    }

    public function getInventory26(): ?string
    {
        return $this->inventory_26;
    }

    public function setInventory26(?string $inventory_26): self
    {
        $this->inventory_26 = $inventory_26;

        return $this;
    }

    public function getInventory27(): ?string
    {
        return $this->inventory_27;
    }

    public function setInventory27(?string $inventory_27): self
    {
        $this->inventory_27 = $inventory_27;

        return $this;
    }

    public function getInventory28(): ?string
    {
        return $this->inventory_28;
    }

    public function setInventory28(?string $inventory_28): self
    {
        $this->inventory_28 = $inventory_28;

        return $this;
    }

    public function getInventory29(): ?string
    {
        return $this->inventory_29;
    }

    public function setInventory29(?string $inventory_29): self
    {
        $this->inventory_29 = $inventory_29;

        return $this;
    }

    public function getInventory30(): ?string
    {
        return $this->inventory_30;
    }

    public function setInventory30(?string $inventory_30): self
    {
        $this->inventory_30 = $inventory_30;

        return $this;
    }

    public function getInventory31(): ?string
    {
        return $this->inventory_31;
    }

    public function setInventory31(?string $inventory_31): self
    {
        $this->inventory_31 = $inventory_31;

        return $this;
    }

    public function getInventory32(): ?string
    {
        return $this->inventory_32;
    }

    public function setInventory32(?string $inventory_32): self
    {
        $this->inventory_32 = $inventory_32;

        return $this;
    }

    public function getInventory33(): ?string
    {
        return $this->inventory_33;
    }

    public function setInventory33(?string $inventory_33): self
    {
        $this->inventory_33 = $inventory_33;

        return $this;
    }

    public function getInventory34(): ?string
    {
        return $this->inventory_34;
    }

    public function setInventory34(?string $inventory_34): self
    {
        $this->inventory_34 = $inventory_34;

        return $this;
    }

    public function getInventory35(): ?string
    {
        return $this->inventory_35;
    }

    public function setInventory35(?string $inventory_35): self
    {
        $this->inventory_35 = $inventory_35;

        return $this;
    }

    public function getInventory36(): ?string
    {
        return $this->inventory_36;
    }

    public function setInventory36(?string $inventory_36): self
    {
        $this->inventory_36 = $inventory_36;

        return $this;
    }

    public function getArmor1(): ?string
    {
        return $this->armor_1;
    }

    public function setArmor1(?string $armor_1): self
    {
        $this->armor_1 = $armor_1;

        return $this;
    }

    public function getArmor2(): ?string
    {
        return $this->armor_2;
    }

    public function setArmor2(?string $armor_2): self
    {
        $this->armor_2 = $armor_2;

        return $this;
    }

    public function getArmor3(): ?string
    {
        return $this->armor_3;
    }

    public function setArmor3(?string $armor_3): self
    {
        $this->armor_3 = $armor_3;

        return $this;
    }

    public function getArmor4(): ?string
    {
        return $this->armor_4;
    }

    public function setArmor4(?string $armor_4): self
    {
        $this->armor_4 = $armor_4;

        return $this;
    }

    public function getInventorySpecial(): ?string
    {
        return $this->inventory_special;
    }

    public function setInventorySpecial(?string $inventory_special): self
    {
        $this->inventory_special = $inventory_special;

        return $this;
    }

    public function getInventory1Count(): ?int
    {
        return $this->inventory_1_count;
    }

    public function setInventory1Count(int $inventory_1_count): self
    {
        $this->inventory_1_count = $inventory_1_count;

        return $this;
    }

    public function getInventory2Count(): ?int
    {
        return $this->inventory_2_count;
    }

    public function setInventory2Count(?int $inventory_2_count): self
    {
        $this->inventory_2_count = $inventory_2_count;

        return $this;
    }

    public function getInventory3Count(): ?int
    {
        return $this->inventory_3_count;
    }

    public function setInventory3Count(int $inventory_3_count): self
    {
        $this->inventory_3_count = $inventory_3_count;

        return $this;
    }

    public function getInventory5Count(): ?int
    {
        return $this->inventory_5_count;
    }

    public function setInventory5Count(?int $inventory_5_count): self
    {
        $this->inventory_5_count = $inventory_5_count;

        return $this;
    }

    public function getInventory4Count(): ?int
    {
        return $this->inventory_4_count;
    }

    public function setInventory4Count(?int $inventory_4_count): self
    {
        $this->inventory_4_count = $inventory_4_count;

        return $this;
    }

    public function getInventory6Count(): ?int
    {
        return $this->inventory_6_count;
    }

    public function setInventory6Count(?int $inventory_6_count): self
    {
        $this->inventory_6_count = $inventory_6_count;

        return $this;
    }

    public function getInventory7Count(): ?int
    {
        return $this->inventory_7_count;
    }

    public function setInventory7Count(?int $inventory_7_count): self
    {
        $this->inventory_7_count = $inventory_7_count;

        return $this;
    }

    public function getInventory8Count(): ?int
    {
        return $this->inventory_8_count;
    }

    public function setInventory8Count(?int $inventory_8_count): self
    {
        $this->inventory_8_count = $inventory_8_count;

        return $this;
    }

    public function getInventory9Count(): ?int
    {
        return $this->inventory_9_count;
    }

    public function setInventory9Count(?int $inventory_9_count): self
    {
        $this->inventory_9_count = $inventory_9_count;

        return $this;
    }

    public function getInventory10Count(): ?int
    {
        return $this->inventory_10_count;
    }

    public function setInventory10Count(?int $inventory_10_count): self
    {
        $this->inventory_10_count = $inventory_10_count;

        return $this;
    }

    public function getInventory11Count(): ?int
    {
        return $this->inventory_11_count;
    }

    public function setInventory11Count(?int $inventory_11_count): self
    {
        $this->inventory_11_count = $inventory_11_count;

        return $this;
    }

    public function getInventory12Count(): ?int
    {
        return $this->inventory_12_count;
    }

    public function setInventory12Count(?int $inventory_12_count): self
    {
        $this->inventory_12_count = $inventory_12_count;

        return $this;
    }

    public function getInventory13Count(): ?int
    {
        return $this->inventory_13_count;
    }

    public function setInventory13Count(?int $inventory_13_count): self
    {
        $this->inventory_13_count = $inventory_13_count;

        return $this;
    }

    public function getInventory14Count(): ?int
    {
        return $this->inventory_14_count;
    }

    public function setInventory14Count(?int $inventory_14_count): self
    {
        $this->inventory_14_count = $inventory_14_count;

        return $this;
    }

    public function getInventory15Count(): ?int
    {
        return $this->inventory_15_count;
    }

    public function setInventory15Count(?int $inventory_15_count): self
    {
        $this->inventory_15_count = $inventory_15_count;

        return $this;
    }

    public function getInventory16Count(): ?int
    {
        return $this->inventory_16_count;
    }

    public function setInventory16Count(?int $inventory_16_count): self
    {
        $this->inventory_16_count = $inventory_16_count;

        return $this;
    }

    public function getInventory17Count(): ?int
    {
        return $this->inventory_17_count;
    }

    public function setInventory17Count(?int $inventory_17_count): self
    {
        $this->inventory_17_count = $inventory_17_count;

        return $this;
    }

    public function getInventory18Count(): ?int
    {
        return $this->inventory_18_count;
    }

    public function setInventory18Count(?int $inventory_18_count): self
    {
        $this->inventory_18_count = $inventory_18_count;

        return $this;
    }

    public function getInventory19Count(): ?int
    {
        return $this->inventory_19_count;
    }

    public function setInventory19Count(?int $inventory_19_count): self
    {
        $this->inventory_19_count = $inventory_19_count;

        return $this;
    }

    public function getInventory20Count(): ?int
    {
        return $this->inventory_20_count;
    }

    public function setInventory20Count(?int $inventory_20_count): self
    {
        $this->inventory_20_count = $inventory_20_count;

        return $this;
    }

    public function getInventory21Count(): ?int
    {
        return $this->inventory_21_count;
    }

    public function setInventory21Count(?int $inventory_21_count): self
    {
        $this->inventory_21_count = $inventory_21_count;

        return $this;
    }

    public function getInventory22Count(): ?int
    {
        return $this->inventory_22_count;
    }

    public function setInventory22Count(?int $inventory_22_count): self
    {
        $this->inventory_22_count = $inventory_22_count;

        return $this;
    }

    public function getInventory23Count(): ?int
    {
        return $this->inventory_23_count;
    }

    public function setInventory23Count(?int $inventory_23_count): self
    {
        $this->inventory_23_count = $inventory_23_count;

        return $this;
    }

    public function getInventory24Count(): ?int
    {
        return $this->inventory_24_count;
    }

    public function setInventory24Count(?int $inventory_24_count): self
    {
        $this->inventory_24_count = $inventory_24_count;

        return $this;
    }

    public function getInventory25Count(): ?int
    {
        return $this->inventory_25_count;
    }

    public function setInventory25Count(?int $inventory_25_count): self
    {
        $this->inventory_25_count = $inventory_25_count;

        return $this;
    }

    public function getInventory26Count(): ?int
    {
        return $this->inventory_26_count;
    }

    public function setInventory26Count(?int $inventory_26_count): self
    {
        $this->inventory_26_count = $inventory_26_count;

        return $this;
    }

    public function getInventory27Count(): ?int
    {
        return $this->inventory_27_count;
    }

    public function setInventory27Count(?int $inventory_27_count): self
    {
        $this->inventory_27_count = $inventory_27_count;

        return $this;
    }

    public function getInventory28Count(): ?int
    {
        return $this->inventory_28_count;
    }

    public function setInventory28Count(?int $inventory_28_count): self
    {
        $this->inventory_28_count = $inventory_28_count;

        return $this;
    }

    public function getInventory29Count(): ?int
    {
        return $this->inventory_29_count;
    }

    public function setInventory29Count(?int $inventory_29_count): self
    {
        $this->inventory_29_count = $inventory_29_count;

        return $this;
    }

    public function getInventory30Count(): ?int
    {
        return $this->inventory_30_count;
    }

    public function setInventory30Count(?int $inventory_30_count): self
    {
        $this->inventory_30_count = $inventory_30_count;

        return $this;
    }

    public function getInventory31Count(): ?int
    {
        return $this->inventory_31_count;
    }

    public function setInventory31Count(?int $inventory_31_count): self
    {
        $this->inventory_31_count = $inventory_31_count;

        return $this;
    }

    public function getInventory32Count(): ?int
    {
        return $this->inventory_32_count;
    }

    public function setInventory32Count(?int $inventory_32_count): self
    {
        $this->inventory_32_count = $inventory_32_count;

        return $this;
    }

    public function getInventory33Count(): ?int
    {
        return $this->inventory_33_count;
    }

    public function setInventory33Count(?int $inventory_33_count): self
    {
        $this->inventory_33_count = $inventory_33_count;

        return $this;
    }

    public function getInventory34Count(): ?int
    {
        return $this->inventory_34_count;
    }

    public function setInventory34Count(?int $inventory_34_count): self
    {
        $this->inventory_34_count = $inventory_34_count;

        return $this;
    }

    public function getInventory35Count(): ?int
    {
        return $this->inventory_35_count;
    }

    public function setInventory35Count(?int $inventory_35_count): self
    {
        $this->inventory_35_count = $inventory_35_count;

        return $this;
    }

    public function getInventory36Count(): ?int
    {
        return $this->inventory_36_count;
    }

    public function setInventory36Count(int $inventory_36_count): self
    {
        $this->inventory_36_count = $inventory_36_count;

        return $this;
    }

    public function getInventorySpecialCount(): ?int
    {
        return $this->inventory_special_count;
    }

    public function setInventorySpecialCount(?int $inventory_special_count): self
    {
        $this->inventory_special_count = $inventory_special_count;

        return $this;
    }
}
