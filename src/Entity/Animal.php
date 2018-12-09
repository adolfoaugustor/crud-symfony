<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnimalRepository")
 */
class Animal
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
    private $name_animal;

    /**
     * @var date
     * @ORM\Column(type="date")
     */
    private $date_birth_animal;

    /**
     * @var object
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Client", mappedBy="animal")
     */
    private $client;

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Breed", inversedBy="id")
     */
    private $breed;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNameAnimal(): string
    {
        return $this->name_animal;
    }

    /**
     * @param string $name_animal
     * @return Animal
     */
    public function setNameAnimal(string $name_animal): Animal
    {
        $this->name_animal = $name_animal;
        return $this;
    }

    /**
     * @return date
     */
    public function getDateBirthAnimal(): date
    {
        return $this->date_birth_animal;
    }

    /**
     * @param date $date_birth_animal
     * @return Animal
     */
    public function setDateBirthAnimal(date $date_birth_animal): Animal
    {
        $this->date_birth_animal = $date_birth_animal;
        return $this;
    }

    /**
     * @return object
     */
    public function getClient(): object
    {
        return $this->client;
    }

    /**
     * @param object $client
     * @return Animal
     */
    public function setClient(object $client): Animal
    {
        $this->client = $client;
        return $this;
    }

    /**
     * @return object
     */
    public function getBreed(): object
    {
        return $this->breed;
    }

    /**
     * @param object $breed
     * @return Animal
     */
    public function setBreed(object $breed): Animal
    {
        $this->breed = $breed;
        return $this;
    }



}
