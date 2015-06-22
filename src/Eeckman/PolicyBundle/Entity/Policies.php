<?php

namespace Eeckman\PolicyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Policies
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\PolicyBundle\Repository\PoliciesRepository")
 */
class Policies
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
     * @var \DateTime
     *
     * @ORM\Column(name="ValidFrom", type="date")
     */
    private $validFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ValidUntil", type="date")
     */
    private $validUntil;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\CoverageBundle\Entity\Currencies")
     * @ORM\JoinColumn(name="ID_Currency", referencedColumnName="id", nullable=true)
     */
    private $iDCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="PolicyNumber", type="string", length=50, nullable=true)
     */
    private $policyNumber;

    /**
     *
     * @ORM\ManyToOne(targetEntity="PolicyHolders")
     * @ORM\JoinColumn(name="ID_PolicyHolder", referencedColumnName="id", nullable=true)
     */
    private $iDPolicyHolder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ExtendedWarranty", type="boolean", nullable=true)
     */
    private $extendedWarranty;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Waiver", type="boolean", nullable=true)
     */
    private $waiver;


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
     * Set validFrom
     *
     * @param \DateTime $validFrom
     * @return Policies
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Get validFrom
     *
     * @return \DateTime 
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Set validUntil
     *
     * @param \DateTime $validUntil
     * @return Policies
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * Get validUntil
     *
     * @return \DateTime 
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * Set iDCurrency
     *
     * @param integer $iDCurrency
     * @return Policies
     */
    public function setIDCurrency($iDCurrency)
    {
        $this->iDCurrency = $iDCurrency;

        return $this;
    }

    /**
     * Get iDCurrency
     *
     * @return integer 
     */
    public function getIDCurrency()
    {
        return $this->iDCurrency;
    }

    /**
     * Set policyNumber
     *
     * @param string $policyNumber
     * @return Policies
     */
    public function setPolicyNumber($policyNumber)
    {
        $this->policyNumber = $policyNumber;

        return $this;
    }

    /**
     * Get policyNumber
     *
     * @return string 
     */
    public function getPolicyNumber()
    {
        return $this->policyNumber;
    }

    /**
     * Set iDPolicyHolder
     *
     * @param integer $iDPolicyHolder
     * @return Policies
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

    /**
     * Set extendedWarranty
     *
     * @param boolean $extendedWarranty
     * @return Policies
     */
    public function setExtendedWarranty($extendedWarranty)
    {
        $this->extendedWarranty = $extendedWarranty;

        return $this;
    }

    /**
     * Get extendedWarranty
     *
     * @return boolean 
     */
    public function getExtendedWarranty()
    {
        return $this->extendedWarranty;
    }

    /**
     * Set waiver
     *
     * @param boolean $waiver
     * @return Policies
     */
    public function setWaiver($waiver)
    {
        $this->waiver = $waiver;

        return $this;
    }

    /**
     * Get waiver
     *
     * @return boolean 
     */
    public function getWaiver()
    {
        return $this->waiver;
    }
}
