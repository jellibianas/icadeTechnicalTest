<?php

namespace App\Repository;

use App\Entity\Country;
use App\Service\TheMovieAPIService;


class CountryRepository extends ServiceEntityRepository
{
    private $theMovieAPIService;

    public function __construct(TheMovieAPIService $theMovieAPIService)
    {
        $this->theMovieAPIService = $theMovieAPIService;
    }

    public function findAll()
    {
        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', 'configuration/countries', []);
        return $this->theMovieAPIService->serializeData($resultQuery->getContent(), Country::class . '[]', 'json');
    }
}
