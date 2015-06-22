<?php

namespace Eeckman\TransportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransportTypes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\TransportsBundle\Repository\TransportTypesRepository")
 */
class TransportTypes
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
     * @ORM\Column(name="ShortName", type="string", length=50, nullable=true)
     */
    private $shortName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Alert", type="boolean", nullable=true)
     */
    private $alert;


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
     * @return TransportTypes
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
     * Set alert
     *
     * @param boolean $alert
     * @return TransportTypes
     */
    public function setAlert($alert)
    {
        $this->alert = $alert;

        return $this;
    }

    /**
     * Get alert
     *
     * @return boolean 
     */
    public function getAlert()
    {
        return $this->alert;
    }
}
