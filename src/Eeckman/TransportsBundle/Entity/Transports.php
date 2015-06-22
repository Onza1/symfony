<?php

namespace Eeckman\TransportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transports
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\TransportsBundle\Repository\TransportsRepository")
 */
class Transports
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
     * @ORM\Column(name="Label", type="string", length=255)
     */
    private $label;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Policy", type="integer", nullable=true)
     */
    private $iDPolicy;

    /**
     * @var string
     *
     * @ORM\Column(name="Origin", type="string", length=50, nullable=true)
     */
    private $origin;

    /**
     * @var string
     *
     * @ORM\Column(name="Destination", type="string", length=50, nullable=true)
     */
    private $destination;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StartDate", type="date")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="EndDate", type="date")
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Carrier", type="integer", nullable=true)
     */
    private $iDCarrier;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Packaging", type="integer", nullable=true)
     */
    private $iDPackaging;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Unpacking", type="boolean")
     */
    private $unpacking;

    /**
     * @var string
     *
     * @ORM\Column(name="UnpackingComments", type="text", nullable=true)
     */
    private $unpackingComments;


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
     * @return Transports
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
     * Set iDPolicy
     *
     * @param integer $iDPolicy
     * @return Transports
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
     * Set startPlace
     *
     * @param string $origin
     * @return Transports
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get startPlace
     *
     * @return string 
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Transports
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Transports
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Transports
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set iDCarrier
     *
     * @param integer $iDCarrier
     * @return Transports
     */
    public function setIDCarrier($iDCarrier)
    {
        $this->iDCarrier = $iDCarrier;

        return $this;
    }

    /**
     * Get iDCarrier
     *
     * @return integer 
     */
    public function getIDCarrier()
    {
        return $this->iDCarrier;
    }

    /**
     * Set iDPackaging
     *
     * @param integer $iDPackaging
     * @return Transports
     */
    public function setIDPackaging($iDPackaging)
    {
        $this->iDPackaging = $iDPackaging;

        return $this;
    }

    /**
     * Get iDPackaging
     *
     * @return integer 
     */
    public function getIDPackaging()
    {
        return $this->iDPackaging;
    }

    /**
     * Set unpacking
     *
     * @param boolean $unpacking
     * @return Transports
     */
    public function setUnpacking($unpacking)
    {
        $this->unpacking = $unpacking;

        return $this;
    }

    /**
     * Get unpacking
     *
     * @return boolean 
     */
    public function getUnpacking()
    {
        return $this->unpacking;
    }

    /**
     * Set unpackingComments
     *
     * @param string $unpackingComments
     * @return Transports
     */
    public function setUnpackingComments($unpackingComments)
    {
        $this->unpackingComments = $unpackingComments;

        return $this;
    }

    /**
     * Get unpackingComments
     *
     * @return string 
     */
    public function getUnpackingComments()
    {
        return $this->unpackingComments;
    }
}
