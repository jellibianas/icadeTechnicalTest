<?php

namespace App\Repository;

use App\Entity\Collection;
use App\Entity\Company;
use App\Service\TheMovieAPIService;


class CompanyRepository
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

        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', sprintf('company/%s', $id), []);
        return $this->theMovieAPIService->serializeData($resultQuery->getContent(), Collection::class, 'json');

    }
}
