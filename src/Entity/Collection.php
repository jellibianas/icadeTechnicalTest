<?php

namespace App\Entity;

use App\Repository\CollectionRepository;

class Collection
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $overview;

    /**
     * @var string
     */
    private $posterPath;

    /**
     * @var string
     */
    private $backdropPath;

    /**
     * @var array
     */
    private $parts = [];

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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getPosterPath(): ?string
    {
        return $this->posterPath;
    }

    /**
     * @param string|null $posterPath
     * @return $this
     */
    public function setPosterPath(?string $posterPath): self
    {
        $this->posterPath = $posterPath;

        return $this;
    }

    public function getBackdropPath(): ?string
    {
        return $this->backdropPath;
    }

    /**
     * @param string $backdropPath
     * @return $this
     */
    public function setBackdropPath(string $backdropPath): self
    {
        $this->backdropPath = $backdropPath;

        return $this;
    }

    public function getParts(): ?array
    {
        return $this->parts;
    }

    /**
     * @param array $parts
     * @return $this
     */
    public function setParts(array $parts): self
    {
        $this->parts = $parts;

        return $this;
    }
}
