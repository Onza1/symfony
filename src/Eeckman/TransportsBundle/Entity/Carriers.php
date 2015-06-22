<?php

namespace Eeckman\TransportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carriers
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\TransportsBundle\Repository\CarriersRepository")
 */
class Carriers
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
     * @ORM\Column(name="CarrierName", type="string", length=50)
     */
    private $carrierName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Shared", type="boolean")
     */
    private $shared;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\PolicyBundle\Entity\PolicyHolders")
     * @ORM\JoinColumn(name="ID_PolicyHolder", referencedColumnName="id", nullable=true)
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
     * Set carrierName
     *
     * @param string $carrierName
     * @return Carriers
     */
    public function setCarrierName($carrierName)
    {
        $this->carrierName = $carrierName;

        return $this;
    }

    /**
     * Get carrierName
     *
     * @return string 
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * Set shared
     *
     * @param boolean $shared
     * @return Carriers
     */
    public function setShared($shared)
    {
        $this->shared = $shared;

        return $this;
    }

    /**
     * Get shared
     *
     * @return boolean 
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * Set iDPolicyHolder
     *
     * @param integer $iDPolicyHolder
     * @return Carriers
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
