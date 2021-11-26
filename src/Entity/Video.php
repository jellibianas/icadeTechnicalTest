<?php

namespace App\Entity;


class Video
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $iso6391;

    /**
     * @var string
     */
    private $iso31661;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $site;

    /**
     * @var int
     */
    private $size;

    /**
     * @var string
     */
    private $type;

    /**
     * @var boolean
     */
    private $official;

    /**
     * @var string
     */
    private $publishedAt;

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

    public function getIso6391(): ?string
    {
        return $this->iso6391;
    }

    /**
     * @param string $iso6391
     * @return $this
     */
    public function setIso6391(string $iso6391): self
    {
        $this->iso6391 = $iso6391;

        return $this;
    }

    public function getIso31661(): ?string
    {
        return $this->iso31661;
    }

    /**
     * @param string $iso31661
     * @return $this
     */
    public function setIso31661(string $iso31661): self
    {
        $this->iso31661 = $iso31661;

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

    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key): self
    {
        $this->key = $key;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    /**
     * @param string $site
     * @return $this
     */
    public function setSite(string $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return $this
     */
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getOfficial(): ?bool
    {
        return $this->official;
    }

    /**
     * @param bool $official
     * @return $this
     */
    public function setOfficial(bool $official): self
    {
        $this->official = $official;

        return $this;
    }

    public function getPublishedAt(): ?string
    {
        return $this->publishedAt;
    }

    /**
     * @param string $publishedAt
     * @return $this
     */
    public function setPublishedAt(string $publishedAt): self
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }
}
