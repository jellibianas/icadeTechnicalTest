<?php

namespace App\Controller;

use App\Form\AutocompleteForm;
use App\Form\SearchForm;
use App\Repository\ApiConfigurationRepository;
use App\Repository\GenreRepository;
use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $genreRepository;
    private $movieRepository;
    private $apiConfigurationRepository;

    public function __construct(GenreRepository $genreRepository, MovieRepository $movieRepository, ApiConfigurationRepository $apiConfigurationRepository)
    {
        $this->genreRepository = $genreRepository;
        $this->movieRepository = $movieRepository;
        $this->apiConfigurationRepository = $apiConfigurationRepository;
    }

    /**
     * @Route("/", name="home")
     */
    public function index(Request $request): Response
    {
        $genreMovieList = $this->genreRepository->findAllByType('movie');
        $formSearchGenre = $this->createForm(SearchForm::class);
        $formAutocomplete = $this->createForm(AutocompleteForm::class);
        $bestMovie = $this->movieRepository->findBestMovie();
        $imageConfiguration = $this->apiConfigurationRepository->getConfiguration()->getImages();

        return $this->render('home/index.html.twig', [
            'genres' => $genreMovieList,
            'bestMovie' => $bestMovie,
            'imageConfiguration' => $imageConfiguration,
            'form' => $formSearchGenre->createView(),
            'formAutocomplete' => $formAutocomplete->createView(),
        ]);
    }

    /**
     * @Route("/autocomplete", name="autocomplete")
     */
    public function autocomplete(Request $request): Response
    {
        $keywords = $request->query->get('movieNames');
        if (!empty($keywords)) {
            $movieNames = $this->movieRepository->findMovieByName($keywords);
        }

        return $this->render('home/autocomplete.html.twig', [
            'movieNames' => $movieNames,

        ]);
    }
}
