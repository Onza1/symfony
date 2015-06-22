<?php

namespace Eeckman\TransportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flights
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\TransportsBundle\Repository\FlightsRepository")
 */
class Flights
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
     * @ORM\Column(name="FlightNo", type="string", length=10)
     */
    private $flightNo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date")
     */
    private $date;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Transports")
     * @ORM\JoinColumn(name="ID_Transport", referencedColumnName="id", nullable=true)
     */
    private $iDTransport;


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
     * Set flightNo
     *
     * @param string $flightNo
     * @return Flights
     */
    public function setFlightNo($flightNo)
    {
        $this->flightNo = $flightNo;

        return $this;
    }

    /**
     * Get flightNo
     *
     * @return string 
     */
    public function getFlightNo()
    {
        return $this->flightNo;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Flights
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set iDTransport
     *
     * @param integer $iDTransport
     * @return Flights
     */
    public function setIDTransport($iDTransport)
    {
        $this->iDTransport = $iDTransport;

        return $this;
    }

    /**
     * Get iDTransport
     *
     * @return integer 
     */
    public function getIDTransport()
    {
        return $this->iDTransport;
    }
}
