<?php

namespace BackendBundle\Service;


class HelperService 
{
    
    private $manager;
    
    public function __construct($manager)
    {
        $this->manager=$manager;
    }
    
    public function arrayToJson($data)
    {
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer()];
        $encoders = ['json'=>new \Symfony\Component\Serializer\Encoder\JsonEncoder()];
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, $encoders);
        $json = $serializer->serialize($data, 'json');
        $response = new \Symfony\Component\HttpFoundation\Response();
        $response->setContent($json);
        $response->headers->set('Content-type','application/json');
        return $response;
    }
}
