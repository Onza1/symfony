<?php

namespace Eeckman\TransportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transports_TransportTypes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\TransportsBundle\Repository\Transports_TransportTypesRepository")
 */
class Transports_TransportTypes
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
     * @ORM\ManyToOne(targetEntity="TransportTypes")
     * @ORM\JoinColumn(name="ID_TransportType", referencedColumnName="id")
     */
    private $iDTransportType;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Transports")
     * @ORM\JoinColumn(name="ID_Transport", referencedColumnName="id")
     */
    private $iDTransport;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NeedValidation", type="boolean", nullable=true)
     */
    private $needValidation;

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
     * Set iDTransportType
     *
     * @param integer $iDTransportType
     * @return Transports_TransportTypes
     */
    public function setIDTransportType($iDTransportType)
    {
        $this->iDTransportType = $iDTransportType;

        return $this;
    }

    /**
     * Get iDTransportType
     *
     * @return integer 
     */
    public function getIDTransportType()
    {
        return $this->iDTransportType;
    }

    /**
     * Set iDTransport
     *
     * @param integer $iDTransport
     * @return Transports_TransportTypes
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

    /**
     * Set needValidation
     *
     * @param boolean $needValidation
     * @return Transports_TransportTypes
     */
    public function setNeedValidation($needValidation)
    {
        $this->needValidation = $needValidation;

        return $this;
    }

    /**
     * Get needValidation
     *
     * @return boolean 
     */
    public function getNeedValidation()
    {
        return $this->needValidation;
    }

    /**
     * Set validation
     *
     * @param boolean $validation
     * @return Transports_TransportTypes
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
