<?php

namespace Eeckman\CoverageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoveragesGuarantees
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\CoverageBundle\Repository\CoveragesGuaranteesRepository")
 */
class CoveragesGuarantees
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
     * @ORM\ManyToOne(targetEntity="Eeckman\PolicyBundle\Entity\Guarantees")
     * @ORM\JoinColumn(name="ID_Guarantee", referencedColumnName="id", nullable=true)
     */
    private $iDGuarantee;

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
     * Set iDGuarantee
     *
     * @param integer $iDGuarantee
     * @return CoveragesGuarantees
     */
    public function setIDGuarantee($iDGuarantee)
    {
        $this->iDGuarantee = $iDGuarantee;

        return $this;
    }

    /**
     * Get iDGuarantee
     *
     * @return integer 
     */
    public function getIDGuarantee()
    {
        return $this->iDGuarantee;
    }

    /**
     * Set iDCoverage
     *
     * @param integer $iDCoverage
     * @return CoveragesGuarantees
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
