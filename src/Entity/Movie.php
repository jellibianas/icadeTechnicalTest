<?php

namespace App\Entity;

use App\Repository\MovieRepository;
use Symfony\Component\Validator\Constraints\Date;


class Movie
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var boolean
     */
    private $adult;

    /**
     * @var string
     */
    private $backdropPath;

    /**
     * @var Collection
     */
    private $belongsToCollection;

    /**
     * @var int
     */
    private $budget;

    /**
     * @var Genre[]
     */
    private $genres = [];

    /**
     * @var string
     */
    private $homepage;

    /**
     * @var string
     */
    private $imdbId;

    /**
     * @var string
     */
    private $originalLanguage;

    /**
     * @var string
     */
    private $originalTitle;

    /**
     * @var string
     */
    private $overview;

    /**
     * @var float
     */
    private $popularity;

    /**
     * @var string
     */
    private $posterPath;

    /**
     * @var Company[]
     */
    private $productionCompanies = [];

    /**
     * @var Country[]
     */
    private $productionCountries = [];

    /**
     * @var string
     */
    private $releaseDate;

    /**
     * @var int
     */
    private $revenue;

    /**
     * @var int
     */
    private $runtime;
    /**
     * @var Language[]
     */
    private $spokenLanguages = [];

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $tagline;
    /**
     * @var string
     */
    private $title;
    /**
     * @var boolean
     */
    private $video;

    /**
     * @var float
     */
    private $voteAverage;

    /**
     * @var int
     */
    private $voteCount;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getAdult(): ?bool
    {
        return $this->adult;
    }

    /**
     * @param bool $adult
     * @return $this
     */
    public function setAdult(bool $adult): self
    {
        $this->adult = $adult;

        return $this;
    }

    public function getBackdropPath(): ?string
    {
        return $this->backdropPath;
    }

    /**
     * @param string|null $backdropPath
     * @return $this
     */
    public function setBackdropPath(?string $backdropPath): self
    {
        $this->backdropPath = $backdropPath;

        return $this;
    }

    /**
     * @return Collection
     */
    public function getBelongsToCollection()
    {
        return $this->belongsToCollection;
    }

    /**
     * @param Collection $belongsToCollection
     * @return $this
     */
    public function setBelongsToCollection(Collection $belongsToCollection): self
    {
        $this->belongsToCollection = $belongsToCollection;

        return $this;
    }

    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(int $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * @return Genre[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param Genre[] $genres
     * @return $this
     */
    public function setGenres(array $genres): self
    {
        $this->genres = $genres;

        return $this;
    }

    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    /**
     * @param string $homepage
     * @return $this
     */
    public function setHomepage(?string $homepage): self
    {
        $this->homepage = $homepage;

        return $this;
    }

    public function getImdbId(): ?string
    {
        return $this->imdbId;
    }

    /**
     * @param string $imdbId
     * @return $this
     */
    public function setImdbId(?string $imdbId): self
    {
        $this->imdbId = $imdbId;

        return $this;
    }

    public function getOriginalLanguage(): ?string
    {
        return $this->originalLanguage;
    }

    /**
     * @param string $originalLanguage
     * @return $this
     */
    public function setOriginalLanguage(string $originalLanguage): self
    {
        $this->originalLanguage = $originalLanguage;

        return $this;
    }

    public function getOriginalTitle(): ?string
    {
        return $this->originalTitle;
    }

    /**
     * @param string $originalTitle
     * @return $this
     */
    public function setOriginalTitle(string $originalTitle): self
    {
        $this->originalTitle = $originalTitle;

        return $this;
    }

    public function getOverview(): ?string
    {
        return $this->overview;
    }

    /**
     * @param string $overview
     * @return $this
     */
    public function setOverview(string $overview): self
    {
        $this->overview = $overview;

        return $this;
    }

    public function getPopularity(): ?int
    {
        return $this->popularity;
    }

    /**
     * @param int $popularity
     * @return $this
     */
    public function setPopularity(int $popularity): self
    {
        $this->popularity = $popularity;

        return $this;
    }

    public function getPosterPath(): ?string
    {
        return $this->posterPath;
    }

    /**
     * @param string $posterPath
     * @return $this
     */
    public function setPosterPath(string $posterPath): self
    {
        $this->posterPath = $posterPath;

        return $this;
    }

    public function getProductionCompanies(): ?array
    {
        return $this->productionCompanies;
    }

    /**
     * @param Company[] $productionCompanies
     * @return $this
     */
    public function setProductionCompanies(array $productionCompanies): self
    {
        $this->productionCompanies = $productionCompanies;

        return $this;
    }

    /**
     * @return Country[]
     */
    public function getProductionCountries(): array
    {
        return $this->productionCountries;
    }

    /**
     * @param Country[] $productionCountries
     * @return $this
     */
    public function setProductionCountries(array $productionCountries): self
    {
        $this->productionCountries = $productionCountries;

        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseDate(): string
    {
        return $this->releaseDate;
    }

    /**
     * @param string $releaseDate
     * @return $this
     */
    public function setReleaseDate(string $releaseDate): self
    {
        $this->releaseDate = $releaseDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getRevenue(): int
    {
        return $this->revenue;
    }

    /**
     * @param int $revenue
     * @return $this
     */
    public function setRevenue(int $revenue): self
    {
        $this->revenue = $revenue;
        return $this;
    }

    /**
     * @return int
     */
    public function getRuntime(): int
    {
        return $this->runtime;
    }

    /**
     * @param int $runtime
     * @return $this
     */
    public function setRuntime(int $runtime): self
    {
        $this->runtime = $runtime;
        return $this;
    }

    /**
     * @return Language[]
     */
    public function getSpokenLanguages(): array
    {
        return $this->spokenLanguages;
    }

    /**
     * @param Language[] $spokenLanguages
     * @return $this
     */
    public function setSpokenLanguages(array $spokenLanguages): self
    {
        $this->spokenLanguages = $spokenLanguages;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getTagline(): ?string
    {
        return $this->tagline;
    }

    /**
     * @param string $tagline
     * @return $this
     */
    public function setTagline(string $tagline): self
    {
        $this->tagline = $tagline;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    public function getVideo(): ?bool
    {
        return $this->video;
    }

    /**
     * @param bool $video
     * @return $this
     */
    public function setVideo(bool $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function getVoteAverage(): ?int
    {
        return $this->voteAverage;
    }

    /**
     * @param int $voteAverage
     * @return $this
     */
    public function setVoteAverage(int $voteAverage): self
    {
        $this->voteAverage = $voteAverage;

        return $this;
    }

    public function getVoteCount(): ?int
    {
        return $this->voteCount;
    }

    /**
     * @param int $voteCount
     * @return $this
     */
    public function setVoteCount(int $voteCount): self
    {
        $this->voteCount = $voteCount;

        return $this;
    }
}
