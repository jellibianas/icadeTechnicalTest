<?php

namespace App\Entity;

use App\Repository\CountryRepository;


class Country
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $iso31661;

    /**
     * @var string
     */
    private $countryEnglishName;

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

    public function getCountryEnglishName(): ?string
    {
        return $this->countryEnglishName;
    }

    /**
     * @param string $countryEnglishName
     * @return $this
     */
    public function setCountryEnglishName(string $countryEnglishName): self
    {
        $this->countryEnglishName = $countryEnglishName;

        return $this;
    }
}
