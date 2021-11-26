<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
class Company
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $headquarters;

    /**
     * @var string
     */
    private $homepage;

    /**
     * @var string
     */
    private $logoPath;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $originCountry;

    /**
     * @param Company
     */
    private $parentCompany;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getHeadquarters(): ?string
    {
        return $this->headquarters;
    }

    /**
     * @param string $headquarters
     * @return $this
     */
    public function setHeadquarters(string $headquarters): self
    {
        $this->headquarters = $headquarters;

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
    public function setHomepage(string $homepage): self
    {
        $this->homepage = $homepage;

        return $this;
    }

    public function getLogoPath(): ?string
    {
        return $this->logoPath;
    }

    /**
     * @param string $logoPath
     * @return $this
     */
    public function setLogoPath(string $logoPath): self
    {
        $this->logoPath = $logoPath;

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

    public function getOriginCountry(): ?string
    {
        return $this->originCountry;
    }

    /**
     * @param string $originCountry
     * @return $this
     */
    public function setOriginCountry(string $originCountry): self
    {
        $this->originCountry = $originCountry;

        return $this;
    }

    public function getParentCompany()
    {
        return $this->parentCompany;
    }

    /**
     * @param Company $parentCompany
     * @return $this
     */
    public function setParentCompany(Company $parentCompany): self
    {
        $this->parentCompany = $parentCompany;

        return $this;
    }
}
