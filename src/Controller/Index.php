<?php


namespace App\Controller;


use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;

class Index extends AbstractController
{


    public function index(SerializerInterface $serializer) {

        $person = new Person("Marvin", "Petker", 18);

        echo $serializer->serialize($person, "json");
        die();
    }


}
