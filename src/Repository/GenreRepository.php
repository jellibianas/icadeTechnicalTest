<?php

namespace App\Repository;

use App\Entity\Genre;
use App\Service\TheMovieAPIService;

class GenreRepository
{
    private $theMovieAPIService;

    public function __construct(TheMovieAPIService $theMovieAPIService)
    {
        $this->theMovieAPIService = $theMovieAPIService;
    }

    /**
     * @param $type
     */
    public function findAllByType($type)
    {
        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', sprintf('genre/%s/list', $type), []);
        $dataResponse = json_decode($resultQuery->getContent(), true)['genres'];
        return $this->theMovieAPIService->serializeData(json_encode($dataResponse), Genre::class . '[]', 'json');
    }
}
