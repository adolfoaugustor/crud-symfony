<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AddressRepository")
 */
class Address
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=150)
     */
    private $street_address;

    /**
     * @var string
     * @ORM\Column(type="string", length=20)
     */
    private $number_address;

    /**
     * @var string
     * @ORM\Column(type="string", length=20)
     */
    private $district_address;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getStreetAddress(): string
    {
        return $this->street_address;
    }

    /**
     * @param string $street_address
     * @return Address
     */
    public function setStreetAddress(string $street_address): Address
    {
        $this->street_address = $street_address;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumberAddress(): string
    {
        return $this->number_address;
    }

    /**
     * @param string $number_address
     * @return Address
     */
    public function setNumberAddress(string $number_address): Address
    {
        $this->number_address = $number_address;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistrictAddress(): string
    {
        return $this->district_address;
    }

    /**
     * @param string $district_address
     * @return Address
     */
    public function setDistrictAddress(string $district_address): Address
    {
        $this->district_address = $district_address;
        return $this;
    }

}
