<?php

namespace App\Tests\Repository;

use App\Entity\Genre;
use App\Repository\GenreRepository;
use App\Service\TheMovieAPIService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\Serializer\Serializer;

class GenreRepositoryTest extends KernelTestCase
{
    public function testGetMovieGenres(): void
    {
        self::bootKernel();
        $mockClient = new MockHttpClient();
        $serializer = new Serializer();
        $apiKey = static::$kernel->getContainer()->getParameter('TMDBAPI_KEY');
        $response = $mockClient->request('GET', 'https://api.themoviedb.org/3/genre/movie/list', ["query"=>['api_key' => $apiKey]]);
        $mockData = json_decode($response->getContent(), true)['genres'];
        $responseData = $serializer->deserialize(json_encode($mockData), Genre::class . '[]', 'json');
        $repository = new GenreRepository(TheMovieAPIService::class);
        $expectedResponseData = $repository->findAllByType('movie');
        self::assertSame($responseData, $expectedResponseData);
    }

}