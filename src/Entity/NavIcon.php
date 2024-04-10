<?php

namespace App\Entity;

use App\Repository\NavIconRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NavIconRepository::class)]
class NavIcon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $icon = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $text = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sup = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): static
    {
        $this->text = $text;

        return $this;
    }

    public function getSup(): ?string
    {
        return $this->sup;
    }

    public function setSup(?string $sup): static
    {
        $this->sup = $sup;

        return $this;
    }
}
