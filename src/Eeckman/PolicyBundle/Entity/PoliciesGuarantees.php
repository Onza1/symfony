<?php

namespace Eeckman\PolicyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoliciesGuarantees
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\PolicyBundle\Repository\PoliciesGuaranteesRepository")
 */
class PoliciesGuarantees
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
     * @ORM\Column(name="ID_Guarantee", type="integer")
     */
    private $iDGuarantee;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Policy", type="integer")
     */
    private $iDPolicy;


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
     * @return PoliciesGuarantees
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
     * Set iDPolicy
     *
     * @param integer $iDPolicy
     * @return PoliciesGuarantees
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
}
