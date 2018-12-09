<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
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
    private $name_client;

    /**
     * @var string
     * @ORM\Column(type="string", length=20)
     */
    private $telephone_client;

    /**
     * @var string
     * @ORM\Column(type="string", length=130)
     */
    private $email_client;

    /**
     * @var object
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Address", cascade={"persist"})
     */
    private $address;

    /**
     * @var object
     *
     * @ORM\ManyToMany(targetEntity="App\Entity\Animal", inversedBy="client")
     * @ORM\JoinTable(name="animal_client")
     */
    private $animal;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNameClient(): string
    {
        return $this->name_client;
    }

    /**
     * @param string $name_client
     * @return Client
     */
    public function setNameClient(string $name_client): Client
    {
        $this->name_client = $name_client;
        return $this;
    }

    /**
     * @return string
     */
    public function getTelephoneClient(): string
    {
        return $this->telephone_client;
    }

    /**
     * @param string $telephone_client
     * @return Client
     */
    public function setTelephoneClient(string $telephone_client): Client
    {
        $this->telephone_client = $telephone_client;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailClient(): string
    {
        return $this->email_client;
    }

    /**
     * @param string $email_client
     * @return Client
     */
    public function setEmailClient(string $email_client): Client
    {
        $this->email_client = $email_client;
        return $this;
    }

    /**
     * @return object
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param object $address
     * @return Client
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return object
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * @param object $animal
     * @return Client
     */
    public function setAnimal($animal): Client
    {
        $this->animal = $animal;
        return $this;
    }


}
