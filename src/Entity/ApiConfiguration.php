<?php

namespace App\Entity;

use App\Repository\ApiConfigurationRepository;

class ApiConfiguration
{

    /**
     * @var ConfigurationImageSystem
     */
    private $images;

    /**
     * @var array
     */
    private $changeKeys;


    public function getImages(): ConfigurationImageSystem
    {
        return $this->images;
    }

    /**
     * @param ConfigurationImageSystem $images
     * @return $this
     */
    public function setImages(ConfigurationImageSystem $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getChangeKeys(): array
    {
        return $this->changeKeys;
    }

    /**
     * @param array $changeKeys
     * @return $this
     */
    public function setChangeKeys(array $changeKeys): self
    {
        $this->changeKeys = $changeKeys;

        return $this;
    }
}
