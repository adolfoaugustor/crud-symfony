<?php

namespace App\DataFixtures;

use App\Entity\Breed;
use App\Entity\Species;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $species = [
            "dog" => [
                ['name' => "SRD"],
                ['name' => "Boxer"],
                ['name' => "Shihtzu"],
                ['name' => "Poodle"],
                ['name' => "Pitbull"],
            ],
            "cat" => [
                ['name' => "SRD"],
                ['name' => "Siamês"],
                ['name' => "Angorá"]
            ]
        ];

        foreach ($species as $specie => $racas){
            $obj = new Species();
            $obj->setNameSpecies($specie);
            $manager->persist($obj);

            foreach ($racas as $raca){
                $obj2 = new Breed();
                $obj2->setNameBreed($raca['name']);
                $obj2->setSpecies($obj);
                $manager->persist($obj2);
            }
        }

        $manager->flush();
    }
}
