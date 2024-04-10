<?php

namespace App\Entity;

use App\Repository\VideoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VideoRepository::class)]
class Video
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titleCarousel = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $video = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descriptionVideo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $video2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $video3 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descriptionVideo2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descriptionVideo3 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleCarousel(): ?string
    {
        return $this->titleCarousel;
    }

    public function setTitleCarousel(?string $titleCarousel): static
    {
        $this->titleCarousel = $titleCarousel;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): static
    {
        $this->video = $video;

        return $this;
    }


    public function getDescriptionVideo(): ?string
    {
        return $this->descriptionVideo;
    }

    public function setDescriptionVideo(?string $descriptionVideo): static
    {
        $this->descriptionVideo = $descriptionVideo;

        return $this;
    }

    public function getVideo2(): ?string
    {
        return $this->video2;
    }

    public function setVideo2(?string $video2): static
    {
        $this->video2 = $video2;

        return $this;
    }

    public function getVideo3(): ?string
    {
        return $this->video3;
    }

    public function setVideo3(?string $video3): static
    {
        $this->video3 = $video3;

        return $this;
    }

    public function getDescriptionVideo2(): ?string
    {
        return $this->descriptionVideo2;
    }

    public function setDescriptionVideo2(?string $descriptionVideo2): static
    {
        $this->descriptionVideo2 = $descriptionVideo2;

        return $this;
    }

    public function getDescriptionVideo3(): ?string
    {
        return $this->descriptionVideo3;
    }

    public function setDescriptionVideo3(?string $descriptionVideo3): static
    {
        $this->descriptionVideo3 = $descriptionVideo3;

        return $this;
    }
}
