<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\ApiConfigurationRepository;
use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    private $movieRepository;
    private $apiConfigurationRepository;

    public function __construct(MovieRepository $movieRepository, ApiConfigurationRepository $apiConfigurationRepository)
    {
        $this->movieRepository = $movieRepository;
        $this->apiConfigurationRepository = $apiConfigurationRepository;
    }

    /**
     * @Route("/movie/list", name="createMovieList")
     */
    public function createMovieList(Request $request): Response
    {
        $genre = [];
        $genreListRequest = $request->query->get('genres');
        if (!empty($genreListRequest)) {
            $genre = explode(',', $genreListRequest);
        }

        $resultMovie = $this->movieRepository->findMovieByGenres($genre);
        $imageConfiguration = $this->apiConfigurationRepository->getConfiguration()->getImages();
        if ($request->query->get('ajax')) {
            return new JsonResponse([
                'content' =>$this->renderView('movie/list.html.twig',[
                    'resultMovie' => $resultMovie,
                    'imageConfiguration' => $imageConfiguration,
                ])
            ]);
        }
        return $this->render('movie/list.html.twig', [
            'resultMovie' => $resultMovie,
            'imageConfiguration' => $imageConfiguration,
        ]);

    }

    /**
    @Route("/movie/list", name="createMovieList")
     */
    /**
     * @Route("/movie/detail", name="MovieDetail")
     */
    public function movieDetails(int $movieId): Response{

        $movieDetails = $this->movieRepository->findMovieById($movieId);
        $imageConfiguration = $this->apiConfigurationRepository->getConfiguration()->getImages();
        $movieVideo = $this->movieRepository->findMovieVideos($movieId);
        return $this->render('movie/detailMovie.html.twig', [
            'movieDetails' => $movieDetails,
            'imageConfiguration' => $imageConfiguration,
            'movieVideo' => $movieVideo
        ]);
    }
}
