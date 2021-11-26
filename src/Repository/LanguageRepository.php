<?php

namespace App\Repository;

use App\Entity\Language;
use App\Service\TheMovieAPIService;


class LanguageRepository
{
    private $theMovieAPIService;

    public function __construct(TheMovieAPIService $theMovieAPIService)
    {
        $this->theMovieAPIService = $theMovieAPIService;
    }

    public function findAll()
    {
        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', 'configuration/languages', []);
        return $this->theMovieAPIService->serializeData($resultQuery->getContent(), Language::class . '[]', 'json');
    }
}
