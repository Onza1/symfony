<?php

namespace Eeckman\AddressBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addresses
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\AddressBundle\Repository\AddressesRepository")
 */
class Addresses
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
     * @ORM\Column(name="Label", type="string", length=100, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressLine1", type="string", length=100)
     */
    private $addressLine1;

    /**
     * @var string
     *
     * @ORM\Column(name="AddressLine2", type="string", length=100, nullable=true)
     */
    private $addressLine2;

    /**
     * @var string
     *
     * @ORM\Column(name="ZipCode", type="string", length=10)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Locality", type="string", length=100)
     */
    private $locality;

    /**
     * @var string
     *
     * @ORM\Column(name="State", type="string", length=50, nullable=true)
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Countries")
     * @ORM\JoinColumn(name="ID_Country", referencedColumnName="id")
     */
    private $iDCountry;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\UserBundle\Entity\Contacts")
     * @ORM\JoinColumn(name="ID_Contact", referencedColumnName="id")
     */
    private $iDContact;


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
     * Set label
     *
     * @param string $label
     * @return Addresses
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set addressLine1
     *
     * @param string $addressLine1
     * @return Addresses
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Get addressLine1
     *
     * @return string 
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     * @return Addresses
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Get addressLine2
     *
     * @return string 
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Addresses
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set locality
     *
     * @param string $locality
     * @return Addresses
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Get locality
     *
     * @return string 
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Addresses
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set iDCountry
     *
     * @param integer $iDCountry
     * @return Addresses
     */
    public function setIDCountry($iDCountry)
    {
        $this->iDCountry = $iDCountry;

        return $this;
    }

    /**
     * Get iDCountry
     *
     * @return integer 
     */
    public function getIDCountry()
    {
        return $this->iDCountry;
    }

    /**
     * Set iDContact
     *
     * @param integer $iDContact
     * @return Addresses
     */
    public function setIDContact($iDContact)
    {
        $this->iDContact = $iDContact;

        return $this;
    }

    /**
     * Get iDContact
     *
     * @return integer 
     */
    public function getIDContact()
    {
        return $this->iDContact;
    }
}
