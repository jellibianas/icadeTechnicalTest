<?php

namespace App\Repository;

use App\Entity\Collection;
use App\Service\TheMovieAPIService;


class CollectionRepository
{
    private $theMovieAPIService;

    public function __construct(TheMovieAPIService $theMovieAPIService)
    {
        $this->theMovieAPIService = $theMovieAPIService;
    }

    /**
     * @param $id
     */
    public function findById($id)
    {

        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', sprintf('collection/%s', $id), []);
        return $this->theMovieAPIService->serializeData($resultQuery->getContent(), Collection::class, 'json');


    }

}
