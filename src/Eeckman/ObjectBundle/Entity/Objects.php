<?php

namespace Eeckman\ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Objects
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\ObjectBundle\Repository\ObjectsRepository")
 */
class Objects
{
    /*  Columns  */

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Object", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientRef", type="string", length=25, nullable=true)
     */
    private $clientRef;

    /**
     * @var string
     *
     * @ORM\Column(name="InscriptionsAndMarkings", type="string", length=200, nullable=true)
     */
    private $inscriptionsAndMarkings;

    /**
     * @var string
     *
     * @ORM\Column(name="DistinguishingFeatures", type="string", length=200, nullable=true)
     */
    private $distinguishingFeatures;

    /**
     * @var string
     *
     * @ORM\Column(name="Subject", type="string", length=200, nullable=true)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="Year", type="string", length=50, nullable=true)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fragile", type="boolean")
     */
    private $fragile;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Selected", type="boolean")
     */
    private $selected;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Received", type="boolean")
     */
    private $received;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ConditionalReportIn", type="boolean")
     */
    private $conditionalReportIn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ConditionalReportOut", type="boolean")
     */
    private $conditionalReportOut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Hung", type="boolean")
     */
    private $hung;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Sent", type="boolean")
     */
    private $sent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Receipted", type="boolean")
     */
    private $receipted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ReceptionNote", type="boolean")
     */
    private $receptionNote;

    /**
     * @var float
     *
     * @ORM\Column(name="Length", type="float", nullable=true)
     */
    private $length;

    /**
     * @var float
     *
     * @ORM\Column(name="Width", type="float", nullable=true)
     */
    private $width;

    /**
     * @var float
     *
     * @ORM\Column(name="Depth", type="float", nullable=true)
     */
    private $depth;

    /**
     * @var float
     *
     * @ORM\Column(name="Weight", type="float", nullable=true)
     */
    private $weight;

    /* End Columns */

    /* FOREIGN KEYS  */
    /**
     * @ORM\ManyToOne(targetEntity="Artists")
     * @ORM\JoinColumn(name="ID_Artist", referencedColumnName="ID_Artist", nullable=true)
     */
    private $iDArtist;

    /**
     * @ORM\ManyToOne(targetEntity="Materials")
     * @ORM\JoinColumn(name="ID_Material",referencedColumnName="ID_Material", nullable=true)
     */
    private $iDMaterial;

    /**
     * @ORM\ManyToOne(targetEntity="Object_Types")
     * @ORM\JoinColumn(name="ID_Object_Type", referencedColumnName="ID_Object_Type", nullable=true)
     */
    private $iDObjectType;

    /**
     * @ORM\ManyToOne(targetEntity="Periods")
     * @ORM\JoinColumn(name="ID_Period", referencedColumnName="ID_Period", nullable=true)
     */
    private $iDPeriod;

    /**
     * @ORM\ManyToOne(targetEntity="Technics")
     * @ORM\JoinColumn(name="ID_Technic", referencedColumnName="ID_Technic", nullable=true)
     */
    private $iDTechnic;
    /**
     * @ORM\ManyToOne(targetEntity="WeightUnit")
     * @ORM\JoinColumn(name="ID_WeightUnit", referencedColumnName="ID_WeightUnit", nullable=true)
     */
    private $iDWeightUnit;

    /**
     * @ORM\ManyToOne(targetEntity="LengthUnit")
     * @ORM\JoinColumn(name="ID_LengthUnit", referencedColumnName="ID_LengthUnit", nullable=true)
     */
    private $iDLengthUnit;

    /* END FOREIGN KEYS */






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
     * Set title
     *
     * @param string $title
     * @return Objects
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set clientRef
     *
     * @param string $clientRef
     * @return Objects
     */
    public function setClientRef($clientRef)
    {
        $this->clientRef = $clientRef;

        return $this;
    }

    /**
     * Get clientRef
     *
     * @return string 
     */
    public function getClientRef()
    {
        return $this->clientRef;
    }

    /**
     * Set inscriptionsAndMarkings
     *
     * @param string $inscriptionsAndMarkings
     * @return Objects
     */
    public function setInscriptionsAndMarkings($inscriptionsAndMarkings)
    {
        $this->inscriptionsAndMarkings = $inscriptionsAndMarkings;

        return $this;
    }

    /**
     * Get inscriptionsAndMarkings
     *
     * @return string 
     */
    public function getInscriptionsAndMarkings()
    {
        return $this->inscriptionsAndMarkings;
    }

    /**
     * Set distinguishingFeatures
     *
     * @param string $distinguishingFeatures
     * @return Objects
     */
    public function setDistinguishingFeatures($distinguishingFeatures)
    {
        $this->distinguishingFeatures = $distinguishingFeatures;

        return $this;
    }

    /**
     * Get distinguishingFeatures
     *
     * @return string 
     */
    public function getDistinguishingFeatures()
    {
        return $this->distinguishingFeatures;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Objects
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set year
     *
     * @param string $year
     * @return Objects
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Objects
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set fragile
     *
     * @param boolean $fragile
     * @return Objects
     */
    public function setFragile($fragile)
    {
        $this->fragile = $fragile;

        return $this;
    }

    /**
     * Get fragile
     *
     * @return boolean 
     */
    public function getFragile()
    {
        return $this->fragile;
    }

    /**
     * Set selected
     *
     * @param boolean $selected
     * @return Objects
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * Get selected
     *
     * @return boolean 
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * Set received
     *
     * @param boolean $received
     * @return Objects
     */
    public function setReceived($received)
    {
        $this->received = $received;

        return $this;
    }

    /**
     * Get received
     *
     * @return boolean 
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Set conditionalReportIn
     *
     * @param boolean $conditionalReportIn
     * @return Objects
     */
    public function setConditionalReportIn($conditionalReportIn)
    {
        $this->conditionalReportIn = $conditionalReportIn;

        return $this;
    }

    /**
     * Get conditionalReportIn
     *
     * @return boolean 
     */
    public function getConditionalReportIn()
    {
        return $this->conditionalReportIn;
    }

    /**
     * Set conditionalReportOut
     *
     * @param boolean $conditionalReportOut
     * @return Objects
     */
    public function setConditionalReportOut($conditionalReportOut)
    {
        $this->conditionalReportOut = $conditionalReportOut;

        return $this;
    }

    /**
     * Get conditionalReportOut
     *
     * @return boolean 
     */
    public function getConditionalReportOut()
    {
        return $this->conditionalReportOut;
    }

    /**
     * Set hung
     *
     * @param boolean $hung
     * @return Objects
     */
    public function setHung($hung)
    {
        $this->hung = $hung;

        return $this;
    }

    /**
     * Get hung
     *
     * @return boolean 
     */
    public function getHung()
    {
        return $this->hung;
    }

    /**
     * Set sent
     *
     * @param boolean $sent
     * @return Objects
     */
    public function setSent($sent)
    {
        $this->sent = $sent;

        return $this;
    }

    /**
     * Get sent
     *
     * @return boolean 
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * Set receipted
     *
     * @param boolean $receipted
     * @return Objects
     */
    public function setReceipted($receipted)
    {
        $this->receipted = $receipted;

        return $this;
    }

    /**
     * Get receipted
     *
     * @return boolean 
     */
    public function getReceipted()
    {
        return $this->receipted;
    }

    /**
     * Set receptionNote
     *
     * @param boolean $receptionNote
     * @return Objects
     */
    public function setReceptionNote($receptionNote)
    {
        $this->receptionNote = $receptionNote;

        return $this;
    }

    /**
     * Get receptionNote
     *
     * @return boolean 
     */
    public function getReceptionNote()
    {
        return $this->receptionNote;
    }

    /**
     * Set length
     *
     * @param float $length
     * @return Objects
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return float 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set width
     *
     * @param float $width
     * @return Objects
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get width
     *
     * @return float 
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set depth
     *
     * @param float $depth
     * @return Objects
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return float 
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set weight
     *
     * @param float $weight
     * @return Objects
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return float 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set iDArtist
     *
     * @param \Eeckman\ObjectBundle\Entity\Artists $iDArtist
     * @return Objects
     */
    public function setIDArtist(\Eeckman\ObjectBundle\Entity\Artists $iDArtist)
    {
        $this->iDArtist = $iDArtist;

        return $this;
    }

    /**
     * Get iDArtist
     *
     * @return \Eeckman\ObjectBundle\Entity\Artists 
     */
    public function getIDArtist()
    {
        return $this->iDArtist;
    }

    /**
     * Set iDMaterial
     *
     * @param \Eeckman\ObjectBundle\Entity\Materials $iDMaterial
     * @return Objects
     */
    public function setIDMaterial(\Eeckman\ObjectBundle\Entity\Materials $iDMaterial)
    {
        $this->iDMaterial = $iDMaterial;

        return $this;
    }

    /**
     * Get iDMaterial
     *
     * @return \Eeckman\ObjectBundle\Entity\Materials 
     */
    public function getIDMaterial()
    {
        return $this->iDMaterial;
    }

    /**
     * Set iDObjectType
     *
     * @param \Eeckman\ObjectBundle\Entity\Object_Types $iDObjectType
     * @return Objects
     */
    public function setIDObjectType(\Eeckman\ObjectBundle\Entity\Object_Types $iDObjectType)
    {
        $this->iDObjectType = $iDObjectType;

        return $this;
    }

    /**
     * Get iDObjectType
     *
     * @return \Eeckman\ObjectBundle\Entity\Object_Types 
     */
    public function getIDObjectType()
    {
        return $this->iDObjectType;
    }

    /**
     * Set iDPeriod
     *
     * @param \Eeckman\ObjectBundle\Entity\Periods $iDPeriod
     * @return Objects
     */
    public function setIDPeriod(\Eeckman\ObjectBundle\Entity\Periods $iDPeriod)
    {
        $this->iDPeriod = $iDPeriod;

        return $this;
    }

    /**
     * Get iDPeriod
     *
     * @return \Eeckman\ObjectBundle\Entity\Periods 
     */
    public function getIDPeriod()
    {
        return $this->iDPeriod;
    }

    /**
     * Set iDTechnic
     *
     * @param \Eeckman\ObjectBundle\Entity\Technics $iDTechnic
     * @return Objects
     */
    public function setIDTechnic(\Eeckman\ObjectBundle\Entity\Technics $iDTechnic)
    {
        $this->iDTechnic = $iDTechnic;

        return $this;
    }

    /**
     * Get iDTechnic
     *
     * @return \Eeckman\ObjectBundle\Entity\Technics 
     */
    public function getIDTechnic()
    {
        return $this->iDTechnic;
    }

    /**
     * Set iDWeightUnit
     *
     * @param \Eeckman\ObjectBundle\Entity\WeightUnit $iDWeightUnit
     * @return Objects
     */
    public function setIDWeightUnit(\Eeckman\ObjectBundle\Entity\WeightUnit $iDWeightUnit)
    {
        $this->iDWeightUnit = $iDWeightUnit;

        return $this;
    }

    /**
     * Get iDWeightUnit
     *
     * @return \Eeckman\ObjectBundle\Entity\WeightUnit 
     */
    public function getIDWeightUnit()
    {
        return $this->iDWeightUnit;
    }

    /**
     * Set iDLengthUnit
     *
     * @param \Eeckman\ObjectBundle\Entity\LengthUnit $iDLengthUnit
     * @return Objects
     */
    public function setIDLengthUnit(\Eeckman\ObjectBundle\Entity\LengthUnit $iDLengthUnit)
    {
        $this->iDLengthUnit = $iDLengthUnit;

        return $this;
    }

    /**
     * Get iDLengthUnit
     *
     * @return \Eeckman\ObjectBundle\Entity\LengthUnit 
     */
    public function getIDLengthUnit()
    {
        return $this->iDLengthUnit;
    }
}
