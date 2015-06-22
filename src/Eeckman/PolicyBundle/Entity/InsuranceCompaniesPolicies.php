<?php

namespace Eeckman\PolicyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InsuranceCompaniesPolicies
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\PolicyBundle\Repository\InsuranceCompaniesPoliciesRepository")
 */
class InsuranceCompaniesPolicies
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
     * @ORM\Column(name="ID_InsuranceCompany", type="integer")
     */
    private $iDInsuranceCompany;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Policy", type="integer")
     */
    private $iDPolicy;

    /**
     * @var float
     *
     * @ORM\Column(name="Percentage", type="float", nullable=true)
     */
    private $percentage;


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
     * Set iDInsuranceCompany
     *
     * @param integer $iDInsuranceCompany
     * @return InsuranceCompaniesPolicies
     */
    public function setIDInsuranceCompany($iDInsuranceCompany)
    {
        $this->iDInsuranceCompany = $iDInsuranceCompany;

        return $this;
    }

    /**
     * Get iDInsuranceCompany
     *
     * @return integer 
     */
    public function getIDInsuranceCompany()
    {
        return $this->iDInsuranceCompany;
    }

    /**
     * Set iDPolicy
     *
     * @param integer $iDPolicy
     * @return InsuranceCompaniesPolicies
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
     * Set percentage
     *
     * @param float $percentage
     * @return InsuranceCompaniesPolicies
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Get percentage
     *
     * @return float 
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
}
