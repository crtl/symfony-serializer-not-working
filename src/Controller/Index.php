<?php


namespace App\Controller;


use App\Entity\Person;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\SerializerInterface;

class Index extends AbstractController
{


    public function index(SerializerInterface $serializer) {

        $person = new Person("Jhon", "Doe", 123);

        echo "<pre>\n";
        echo $serializer->serialize($person, "json");
        echo "</pre>";
        die();
    }


}
