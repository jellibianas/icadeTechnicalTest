<?php

namespace App\Repository;

use App\Entity\Movie;
use App\Entity\Video;
use App\Service\TheMovieAPIService;


class MovieRepository
{

    private $theMovieAPIService;

    public function __construct(TheMovieAPIService $theMovieAPIService)
    {
        $this->theMovieAPIService = $theMovieAPIService;
    }

    public function findBestMovie()
    {
        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', 'movie/popular', []);
        $contentBestMovie = json_decode($resultQuery->getContent())->results[0];
        return $this->theMovieAPIService->serializeData(json_encode($contentBestMovie), Movie::class, 'json');
    }

    public function findMovieByGenres(array $genres = [])
    {
        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', 'discover/movie', ["query" => ['with_genres' => implode(',', $genres), 'sort_by' => "popularity.desc"]]);
        $contentByGenres = json_decode($resultQuery->getContent())->results;
        return $this->theMovieAPIService->serializeData(json_encode($contentByGenres), Movie::class . '[]', 'json');
    }

    public function findMovieById(int $movieId)
    {
        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', sprintf('movie/%s', $movieId), []);
        return $this->theMovieAPIService->serializeData($resultQuery->getContent(), Movie::class, 'json');
    }

    public function findMovieVideos(int $movieId)
    {
        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', sprintf('movie/%s/videos', $movieId), []);
        $contentVideos = json_decode($resultQuery->getContent())->results;
        return $this->theMovieAPIService->serializeData(json_encode($contentVideos), Video::class . '[]', 'json');
    }

    public function findMovieByName(string $keywords)
    {
        $resultQuery = $this->theMovieAPIService->getResourceByPath('GET', 'search/movie', ["query" => ['query' => $keywords]]);
        return json_decode($resultQuery->getContent())->results;

    }

}
