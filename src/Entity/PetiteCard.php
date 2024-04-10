<?php

namespace App\Entity;

use App\Repository\PetiteCardRepository;
use DateTimeImmutable;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use function PHPSTORM_META\type;

#[ORM\Entity(repositoryClass: PetiteCardRepository::class)]
class PetiteCard
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $subtitle = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $iconClock = null;

    #[ORM\Column(length: 255)]
    private ?string $author = null;

    #[ORM\Column(type: Types::DATETIME_IMMUTABLE, nullable:true)]
    private ?DateTimeInterface $publishedAt = null;


    #[ORM\Column(length: 255)]
    private ?string $iconBookmark = null;

    #[ORM\Column(length: 255)]
    private ?string $iconDownload = null;

    #[ORM\Column]
    private ?bool $isAbonne = null;

    #[ORM\Column]
    private ?float $prix = null;

    public function __toString() {
        return $this->publishedAt->format('Y-m-d H:m:i');

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): static
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getIconClock(): ?string
    {
        return $this->iconClock;
    }

    public function setIconClock(string $iconClock): static
    {
        $this->iconClock = $iconClock;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): static
    {
        $this->author = $author;

        return $this;
    }

    public function getPublishedAt(): ?DateTimeInterface
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(DateTimeInterface $publishedAt): static
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    public function getIconBookmark(): ?string
    {
        return $this->iconBookmark;
    }

    public function setIconBookmark(string $iconBookmark): static
    {
        $this->iconBookmark = $iconBookmark;

        return $this;
    }

    public function getIconDownload(): ?string
    {
        return $this->iconDownload;
    }

    public function setIconDownload(string $iconDownload): static
    {
        $this->iconDownload = $iconDownload;

        return $this;
    }

    public function isIsAbonne(): ?bool
    {
        return $this->isAbonne;
    }

    public function setIsAbonne(bool $isAbonne): static
    {
        $this->isAbonne = $isAbonne;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;

        return $this;
    }
}