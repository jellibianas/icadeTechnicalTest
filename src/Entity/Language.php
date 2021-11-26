<?php

namespace App\Entity;

use App\Repository\LanguageRepository;

class Language
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
    private $englishName;

    /**
     * @var string
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
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

    public function getEnglishName(): ?string
    {
        return $this->englishName;
    }

    /**
     * @param string $englishName
     * @return $this
     */
    public function setEnglishName(string $englishName): self
    {
        $this->englishName = $englishName;

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
}
