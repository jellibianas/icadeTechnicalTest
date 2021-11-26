<?php

namespace App\Repository;

use App\Entity\ApiConfiguration;
use App\Service\TheMovieAPIService;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Filesystem\Filesystem;


class ApiConfigurationRepository
{
    private $theMovieAPIService;
    private $parameterBag;
    private $filesystem;

    public function __construct(TheMovieAPIService $theMovieAPIService, ParameterBagInterface $parameterBag, Filesystem $filesystem)
    {
        $this->theMovieAPIService = $theMovieAPIService;
        $this->parameterBag = $parameterBag;
        $this->filesystem = $filesystem;
    }

    public function getConfiguration()
    {
        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', 'configuration', []);
        $responseContent = $this->theMovieAPIService->serializeData($resultQuery->getContent(), ApiConfiguration::class, 'json');
        return $responseContent;

    }

}
