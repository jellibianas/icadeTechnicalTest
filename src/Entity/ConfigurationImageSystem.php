<?php

namespace App\Entity;

use App\Repository\ConfigurationImageSystemRepository;

class ConfigurationImageSystem
{

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var string
     */
    private $secureBaseUrl;

    /**
     * @var array
     */
    private $backdropSizes = [];

    /**
     * @var array
     */
    private $logoSizes = [];

    /**
     * @var array
     */
    private $posterSizes = [];

    /**
     * @var array
     */
    private $profileSizes = [];

    /**
     * @var array
     */
    private $stillSizes = [];


    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     * @return $this
     */
    public function setBaseUrl(string $baseUrl): self
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    public function getSecureBaseUrl(): string
    {
        return $this->secureBaseUrl;
    }

    /**
     * @param string $secureBaseUrl
     * @return $this
     */
    public function setSecureBaseUrl(string $secureBaseUrl): self
    {
        $this->secureBaseUrl = $secureBaseUrl;

        return $this;
    }

    public function getBackdropSizes(): ?array
    {
        return $this->backdropSizes;
    }

    /**
     * @param array $backdropSizes
     * @return $this
     */
    public function setBackdropSizes(array $backdropSizes): self
    {
        $this->backdropSizes = $backdropSizes;

        return $this;
    }

    public function getLogoSizes(): array
    {
        return $this->logoSizes;
    }

    /**
     * @param array $logoSizes
     * @return $this
     */
    public function setLogoSizes(array $logoSizes): self
    {
        $this->logoSizes = $logoSizes;

        return $this;
    }

    public function getPosterSizes(): array
    {
        return $this->posterSizes;
    }

    /**
     * @param array $posterSizes
     * @return $this
     */
    public function setPosterSizes(array $posterSizes): self
    {
        $this->posterSizes = $posterSizes;

        return $this;
    }

    public function getProfileSizes(): array
    {
        return $this->profileSizes;
    }

    /**
     * @param array $profileSizes
     * @return $this
     */
    public function setProfileSizes(array $profileSizes): self
    {
        $this->profileSizes = $profileSizes;

        return $this;
    }

    public function getStillSizes(): array
    {
        return $this->stillSizes;
    }

    /**
     * @param array $stillSizes
     * @return $this
     */
    public function setStillSizes(array $stillSizes): self
    {
        $this->stillSizes = $stillSizes;

        return $this;
    }
}
