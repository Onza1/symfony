<?php

namespace Eeckman\CoverageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoveragesTransports
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\CoverageBundle\Repository\CoveragesTransportsRepository")
 */
class CoveragesTransports
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
     * @var integer
     *
     * @ORM\Column(name="ID_Transport", type="integer", nullable=true)
     */
    private $iDTransport;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Coverage", type="integer", nullable=true)
     */
    private $iDCoverage;


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
     * Set iDTransport
     *
     * @param integer $iDTransport
     * @return CoveragesTransports
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
     * Set iDCoverage
     *
     * @param integer $iDCoverage
     * @return CoveragesTransports
     */
    public function setIDCoverage($iDCoverage)
    {
        $this->iDCoverage = $iDCoverage;

        return $this;
    }

    /**
     * Get iDCoverage
     *
     * @return integer 
     */
    public function getIDCoverage()
    {
        return $this->iDCoverage;
    }
}
