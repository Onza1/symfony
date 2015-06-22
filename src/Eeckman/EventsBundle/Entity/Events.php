<?php

namespace Eeckman\EventsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\EventsBundle\Repository\EventsRepository")
 */
class Events
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
     * @ORM\Column(name="ShortName", type="string", length=50)
     */
    private $shortName;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Policy", type="integer")
     */
    private $iDPolicy;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Adress", type="integer", nullable=true)
     */
    private $iDAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PolicyHolder", type="integer", nullable=true)
     */
    private $iDPolicyHolder;


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
     * Set shortName
     *
     * @param string $shortName
     * @return Events
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set iDPolicy
     *
     * @param integer $iDPolicy
     * @return Events
     */
    public function setIDPolicy($iDPolicy)
    {
        $this->iDPolicy = $iDPolicy;

        return $this;
    }

    /**
     * Get iDPolicy
     *
     * @return integer 
     */
    public function getIDPolicy()
    {
        return $this->iDPolicy;
    }

    /**
     * Set iDAdress
     *
     * @param integer $iDAdress
     * @return Events
     */
    public function setIDAdress($iDAdress)
    {
        $this->iDAdress = $iDAdress;

        return $this;
    }

    /**
     * Get iDAdress
     *
     * @return integer 
     */
    public function getIDAdress()
    {
        return $this->iDAdress;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Events
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set iDPolicyHolder
     *
     * @param integer $iDPolicyHolder
     * @return Events
     */
    public function setIDPolicyHolder($iDPolicyHolder)
    {
        $this->iDPolicyHolder = $iDPolicyHolder;

        return $this;
    }

    /**
     * Get iDPolicyHolder
     *
     * @return integer 
     */
    public function getIDPolicyHolder()
    {
        return $this->iDPolicyHolder;
    }
}
