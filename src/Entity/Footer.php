<?php

namespace App\Entity;

use App\Repository\FooterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FooterRepository::class)]
class Footer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $illustration = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subtitle1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subtitle2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subtitle3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subtitle4 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subtitle5 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $subtitle6 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(?string $illustration): static
    {
        $this->illustration = $illustration;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle1(): ?string
    {
        return $this->subtitle1;
    }

    public function setSubtitle1(?string $subtitle1): static
    {
        $this->subtitle1 = $subtitle1;

        return $this;
    }

    public function getSubtitle2(): ?string
    {
        return $this->subtitle2;
    }

    public function setSubtitle2(?string $subtitle2): static
    {
        $this->subtitle2 = $subtitle2;

        return $this;
    }

    public function getSubtitle3(): ?string
    {
        return $this->subtitle3;
    }

    public function setSubtitle3(?string $subtitle3): static
    {
        $this->subtitle3 = $subtitle3;

        return $this;
    }

    public function getSubtitle4(): ?string
    {
        return $this->subtitle4;
    }

    public function setSubtitle4(?string $subtitle4): static
    {
        $this->subtitle4 = $subtitle4;

        return $this;
    }

    public function getSubtitle5(): ?string
    {
        return $this->subtitle5;
    }

    public function setSubtitle5(?string $subtitle5): static
    {
        $this->subtitle5 = $subtitle5;

        return $this;
    }

    public function getSubtitle6(): ?string
    {
        return $this->subtitle6;
    }

    public function setSubtitle6(?string $subtitle6): static
    {
        $this->subtitle6 = $subtitle6;

        return $this;
    }
}
