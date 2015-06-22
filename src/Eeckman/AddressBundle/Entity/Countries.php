<?php

namespace Eeckman\AddressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\AddressBundle\Repository\CountriesRepository")
 */
class Countries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="NameFR", type="string", length=50)
     */
    private $nameFR;

    /**
     * @var string
     *
     * @ORM\Column(name="NameEN", type="string", length=50)
     */
    private $nameEN;

    /**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=2)
     */
    private $code;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameFR
     *
     * @param string $nameFR
     * @return Countries
     */
    public function setNameFR($nameFR)
    {
        $this->nameFR = $nameFR;

        return $this;
    }

    /**
     * Get nameFR
     *
     * @return string 
     */
    public function getNameFR()
    {
        return $this->nameFR;
    }

    /**
     * Set nameEN
     *
     * @param string $nameEN
     * @return Countries
     */
    public function setNameEN($nameEN)
    {
        $this->nameEN = $nameEN;

        return $this;
    }

    /**
     * Get nameEN
     *
     * @return string 
     */
    public function getNameEN()
    {
        return $this->nameEN;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Countries
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }
}
