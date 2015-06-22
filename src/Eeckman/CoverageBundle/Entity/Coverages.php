<?php

namespace Eeckman\CoverageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coverages
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\CoverageBundle\Repository\CoveragesRepository")
 */
class Coverages
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
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\ObjectBundle\Entity\Objects")
     * @ORM\JoinColumn(name="ID_Object", referencedColumnName="id")
     */
    private $iDObject;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\EventsBundle\Entity\Events")
     * @ORM\JoinColumn(name="ID_Event", referencedColumnName="id")
     */
    private $iDEvent;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\UserBundle\Entity\Owners")
     * @ORM\JoinColumn(name="ID_Owner", referencedColumnName="id", nullable=true)
     */
    private $iDOwner;

    /**
     * @var float
     *
     * @ORM\Column(name="InsuranceValue", type="float", nullable=true)
     */
    private $insuranceValue;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Currencies")
     * @ORM\JoinColumn(name="ID_Currency", referencedColumnName="id", nullable=true)
     */
    private $iDCurrency;

    /**
     * @var float
     *
     * @ORM\Column(name="OriginalInsuranceValue", type="float", nullable=true)
     */
    private $originalInsuranceValue;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Currencies")
     * @ORM\JoinColumn(name="OriginalCurrency", referencedColumnName="id", nullable=true)
     */
    private $originalCurrency;

    /**
     * @var float
     *
     * @ORM\Column(name="ConversionOriginalDestination", type="float", nullable=true)
     */
    private $conversionOriginalDestination;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\PolicyBundle\Entity\Policies")
     * @ORM\JoinColumn(name="ID_Policy", referencedColumnName="id", nullable=true)
     */
    private $iDPolicy;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Stay", type="boolean", nullable=true)
     */
    private $stay;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ExtendedWarrant", type="boolean", nullable=true)
     */
    private $extendedWarrant;

    /**
     *
     * @ORM\ManyToOne(targetEntity="ValueTypes")
     * @ORM\JoinColumn(name="ID_ValueType", referencedColumnName="id", nullable=true)
     */
    private $iDValueType;


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
     * Set iDObject
     *
     * @param integer $iDObject
     * @return Coverages
     */
    public function setIDObject($iDObject)
    {
        $this->iDObject = $iDObject;

        return $this;
    }

    /**
     * Get iDObject
     *
     * @return integer 
     */
    public function getIDObject()
    {
        return $this->iDObject;
    }

    /**
     * Set iDEvent
     *
     * @param integer $iDEvent
     * @return Coverages
     */
    public function setIDEvent($iDEvent)
    {
        $this->iDEvent = $iDEvent;

        return $this;
    }

    /**
     * Get iDEvent
     *
     * @return integer 
     */
    public function getIDEvent()
    {
        return $this->iDEvent;
    }

    /**
     * Set iDOwner
     *
     * @param integer $iDOwner
     * @return Coverages
     */
    public function setIDOwner($iDOwner)
    {
        $this->iDOwner = $iDOwner;

        return $this;
    }

    /**
     * Get iDOwner
     *
     * @return integer 
     */
    public function getIDOwner()
    {
        return $this->iDOwner;
    }

    /**
     * Set insuranceValue
     *
     * @param float $insuranceValue
     * @return Coverages
     */
    public function setInsuranceValue($insuranceValue)
    {
        $this->insuranceValue = $insuranceValue;

        return $this;
    }

    /**
     * Get insuranceValue
     *
     * @return float 
     */
    public function getInsuranceValue()
    {
        return $this->insuranceValue;
    }

    /**
     * Set iDCurrency
     *
     * @param integer $iDCurrency
     * @return Coverages
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
     * Set originalInsuranceValue
     *
     * @param float $originalInsuranceValue
     * @return Coverages
     */
    public function setOriginalInsuranceValue($originalInsuranceValue)
    {
        $this->originalInsuranceValue = $originalInsuranceValue;

        return $this;
    }

    /**
     * Get originalInsuranceValue
     *
     * @return float 
     */
    public function getOriginalInsuranceValue()
    {
        return $this->originalInsuranceValue;
    }

    /**
     * Set originalCurrency
     *
     * @param integer $originalCurrency
     * @return Coverages
     */
    public function setOriginalCurrency($originalCurrency)
    {
        $this->originalCurrency = $originalCurrency;

        return $this;
    }

    /**
     * Get originalCurrency
     *
     * @return integer 
     */
    public function getOriginalCurrency()
    {
        return $this->originalCurrency;
    }

    /**
     * Set conversionOriginalDestination
     *
     * @param float $conversionOriginalDestination
     * @return Coverages
     */
    public function setConversionOriginalDestination($conversionOriginalDestination)
    {
        $this->conversionOriginalDestination = $conversionOriginalDestination;

        return $this;
    }

    /**
     * Get conversionOriginalDestination
     *
     * @return float 
     */
    public function getConversionOriginalDestination()
    {
        return $this->conversionOriginalDestination;
    }

    /**
     * Set iDPolicy
     *
     * @param integer $iDPolicy
     * @return Coverages
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
     * Set stay
     *
     * @param boolean $stay
     * @return Coverages
     */
    public function setStay($stay)
    {
        $this->stay = $stay;

        return $this;
    }

    /**
     * Get stay
     *
     * @return boolean 
     */
    public function getStay()
    {
        return $this->stay;
    }

    /**
     * Set extendedWarrant
     *
     * @param boolean $extendedWarrant
     * @return Coverages
     */
    public function setExtendedWarrant($extendedWarrant)
    {
        $this->extendedWarrant = $extendedWarrant;

        return $this;
    }

    /**
     * Get extendedWarrant
     *
     * @return boolean 
     */
    public function getExtendedWarrant()
    {
        return $this->extendedWarrant;
    }

    /**
     * Set iDValueType
     *
     * @param integer $iDValueType
     * @return Coverages
     */
    public function setIDValueType($iDValueType)
    {
        $this->iDValueType = $iDValueType;

        return $this;
    }

    /**
     * Get iDValueType
     *
     * @return integer 
     */
    public function getIDValueType()
    {
        return $this->iDValueType;
    }
}
