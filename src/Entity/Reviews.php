<?php

namespace App\Entity;

use App\Repository\ReviewsRepository;
use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewsRepository::class)]
#[ApiResource]
class Reviews
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Range(
        min: 120,
        max: 180,
        notInRangeMessage: 'Rate should be between 1 to 10',
    )]    
    private ?int $star_rating = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $review_text = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStarRating(): ?int
    {
        return $this->star_rating;
    }

    public function setStarRating(?int $star_rating): static
    {
        $this->star_rating = $star_rating;

        return $this;
    }

    public function getReviewText(): ?string
    {
        return $this->review_text;
    }

    public function setReviewText(?string $review_text): static
    {
        $this->review_text = $review_text;

        return $this;
    }
}
