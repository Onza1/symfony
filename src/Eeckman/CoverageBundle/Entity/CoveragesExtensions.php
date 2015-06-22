<?php

namespace Eeckman\CoverageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoveragesExtensions
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\CoverageBundle\Repository\CoveragesExtensionsRepository")
 */
class CoveragesExtensions
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
     * @ORM\ManyToOne(targetEntity="Coverages")
     * @ORM\JoinColumn(name="ID_Coverage", referencedColumnName="id", nullable=false)
     */
    private $iDCoverage;

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
     * @return CoveragesExtensions
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
     * @return CoveragesExtensions
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
     * Set iDCoverage
     *
     * @param integer $iDCoverage
     * @return CoveragesExtensions
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

    /**
     * Set userRequest
     *
     * @param boolean $userRequest
     * @return CoveragesExtensions
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
     * @return CoveragesExtensions
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
