<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BreedRepository")
 */
class Breed
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $name_breed;

    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="App\Entity\Species", inversedBy="id")
     */
    private $species;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNameBreed(): string
    {
        return $this->name_breed;
    }

    /**
     * @param string $name_breed
     * @return Breed
     */
    public function setNameBreed(string $name_breed): Breed
    {
        $this->name_breed = $name_breed;
        return $this;
    }

    /**
     * @return object
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @param object $species
     * @return Breed
     */
    public function setSpecies($species): Breed
    {
        $this->species = $species;
        return $this;
    }

    public function getNaSpecie()
    {
        return $this->getSpecies() ? $this->getSpecies()->getNameSpecies : null;
    }

}
