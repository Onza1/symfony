<?php

namespace Eeckman\EventsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventExtensions
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\EventsBundle\Entity\EventExtensionsRepository")
 */
class EventExtensions
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
     *
     * @ORM\ManyToOne(targetEntity="Events")
     * @ORM\JoinColumn(name="ID_Event", referencedColumnName="id", nullable=false)
     */
    private $iDEvent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="UserRequest", type="boolean", nullable=true)
     */
    private $userRequest;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Validation", type="boolean", nullable=true)
     */
    private $validation;


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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return EventExtensions
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
     * @return EventExtensions
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
     * Set iDEvent
     *
     * @param integer $iDEvent
     * @return EventExtensions
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
     * Set userRequest
     *
     * @param boolean $userRequest
     * @return EventExtensions
     */
    public function setUserRequest($userRequest)
    {
        $this->userRequest = $userRequest;

        return $this;
    }

    /**
     * Get userRequest
     *
     * @return boolean 
     */
    public function getUserRequest()
    {
        return $this->userRequest;
    }

    /**
     * Set validation
     *
     * @param boolean $validation
     * @return EventExtensions
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return boolean 
     */
    public function getValidation()
    {
        return $this->validation;
    }
}
