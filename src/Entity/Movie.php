<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\MovieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovieRepository::class)]
class Movie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'date')]
    private $releasedAt;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $country;

    #[ORM\ManyToMany(targetEntity: Actor::class, inversedBy: 'movies')]
    private $actor;

    #[ORM\ManyToMany(targetEntity: Director::class, inversedBy: 'movies')]
    private $director;

    #[ORM\ManyToMany(targetEntity: Genre::class, inversedBy: 'movies')]
    private $genre;

    #[ORM\Column(type: 'string', length: 255)]
    private $filename;

    #[ORM\Column(type: 'string', length: 255, unique: true)]
    private $slug;

    #[ORM\OneToMany(mappedBy: 'movie', targetEntity: Bookmark::class)]
    private $bookmark;

    #[ORM\OneToMany(mappedBy: 'movie', targetEntity: Rating::class)]
    private $rating;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $trailer;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $watch;

    #[ORM\ManyToOne(targetEntity: Netflix::class, inversedBy: 'movies')]
    private $netflix;

    #[ORM\ManyToOne(targetEntity: Cinema::class, inversedBy: 'movie')]
    private $cinema;

    public function __construct()
    {
        $this->actor = new ArrayCollection();
        $this->director = new ArrayCollection();
        $this->genre = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getReleasedAt(): ?\DateTimeInterface
    {
        return $this->releasedAt;
    }

    public function setReleasedAt(\DateTimeInterface $releasedAt): self
    {
        $this->releasedAt = $releasedAt;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return Collection<int, Actor>
     */
    public function getActor(): Collection
    {
        return $this->actor;
    }

    public function addActor(Actor $actor): self
    {
        if (!$this->actor->contains($actor)) {
            $this->actor[] = $actor;
        }

        return $this;
    }

    public function removeActor(Actor $actor): self
    {
        $this->actor->removeElement($actor);

        return $this;
    }

    /**
     * @return Collection<int, Director>
     */
    public function getDirector(): Collection
    {
        return $this->director;
    }

    public function addDirector(Director $director): self
    {
        if (!$this->director->contains($director)) {
            $this->director[] = $director;
        }

        return $this;
    }

    public function removeDirector(Director $director): self
    {
        $this->director->removeElement($director);

        return $this;
    }

    /**
     * @return Collection<int, Genre>
     */
    public function getGenre(): Collection
    {
        return $this->genre;
    }

    public function addGenre(Genre $genre): self
    {
        if (!$this->genre->contains($genre)) {
            $this->genre[] = $genre;
        }

        return $this;
    }

    public function removeGenre(Genre $genre): self
    {
        $this->genre->removeElement($genre);

        return $this;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getTrailer(): ?string
    {
        return $this->trailer;
    }

    public function setTrailer(?string $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }

    public function getWatch(): ?string
    {
        return $this->watch;
    }

    public function setWatch(?string $watch): self
    {
        $this->watch = $watch;

        return $this;
    }

    public function getNetflix(): ?Netflix
    {
        return $this->netflix;
    }

    public function setNetflix(?Netflix $netflix): self
    {
        $this->netflix = $netflix;

        return $this;
    }

    public function getCinema(): ?Cinema
    {
        return $this->cinema;
    }

    public function setCinema(?Cinema $cinema): self
    {
        $this->cinema = $cinema;

        return $this;
    }

    public function getBookmark()
    {
        return $this->bookmark;
    }

    public function setBookmark($bookmark): void
    {
        $this->bookmark = $bookmark;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating): void
    {
        $this->rating = $rating;
    }
}
