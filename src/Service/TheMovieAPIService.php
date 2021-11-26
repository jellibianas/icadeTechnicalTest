<?php

namespace App\Service;

use App\Entity\ApiConfiguration;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TheMovieAPIService
{
    private $logger;
    private $tmdbApiClient;
    private $serializer;
    private $parameterBag;
    private $filesystem;
    public function __construct(LoggerInterface $logger, HttpClientInterface $tmdbApiClient, SerializerInterface $serializer, ParameterBagInterface $parameterBag, Filesystem $filesystem){
        $this->logger = $logger;
        $this->tmdbApiClient = $tmdbApiClient;
        $this->serializer = $serializer;
        $this->parameterBag = $parameterBag;
        $this->filesystem = $filesystem;
    }

    public function getResourceByPath($method, $path, $options){
        try {
            $response = $this->tmdbApiClient->request($method,$path,$options);
            return $response;
        } catch (\Exception $exception){
            $this->logger->error('An error occurred during call api endpooint :' . $path . ' with message code: ' . $exception->getCode().' and message text :'.$exception->getMessage());
            return null;
        }

    }

    public function serializeData($contents, $type, $format){
        try {
            return $this->serializer->deserialize($contents, $type , $format);
        } catch (\Exception $exception){
            $this->logger->error('An error occurred during deserialize :' . $contents . 'for class ; '.$type.'with message code: ' . $exception->getCode().' and message text :'.$exception->getMessage());
        }
    }

    public function getStoredConfiguration(){

        $pathStorage = $this->parameterBag->get('app.path_storage_configuration');
        if ($this->filesystem->exists($pathStorage . 'configuration.json')) {
            $resultQuery = $this->getResourceByPath('GET',$pathStorage . 'configuration.json',[]);
            return  $this->theMovieAPIService->serializeData($resultQuery->getContent(), ApiConfiguration::class, 'json');

        }

    }

}