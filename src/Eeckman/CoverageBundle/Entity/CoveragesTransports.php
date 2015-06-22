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
     *
     * @ORM\ManyToOne(targetEntity="Eeckman\TransportsBundle\Entity\Transports")
     * @ORM\JoinColumn(name="ID_Transport", referencedColumnName="id", nullable=true)
     */
    private $iDTransport;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Coverages")
     * @ORM\JoinColumn(name="ID_Coverage", referencedColumnName="id", nullable=true)
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
