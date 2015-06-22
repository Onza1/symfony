<?php

namespace Eeckman\PolicyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactsPolicyHolders
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\PolicyBundle\Repository\ContactsPolicyHoldersRepository")
 */
class ContactsPolicyHolders
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
     * @ORM\ManyToOne(targetEntity="Eeckman\UserBundle\Entity\Contacts")
     * @ORM\JoinColumn(name="ID_Contact", referencedColumnName="id", nullable=true)
     */
    private $iDContact;

    /**
     *
     * @ORM\ManyToOne(targetEntity="PolicyHolders")
     * @ORM\JoinColumn(name="ID_PolicyHolder", referencedColumnName="id", nullable=true)
     */
    private $iDPolicyHolder;


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
     * Set iDContact
     *
     * @param integer $iDContact
     * @return ContactsPolicyHolders
     */
    public function setIDContact($iDContact)
    {
        $this->iDContact = $iDContact;

        return $this;
    }

    /**
     * Get iDContact
     *
     * @return integer 
     */
    public function getIDContact()
    {
        return $this->iDContact;
    }

    /**
     * Set iDPolicyHolder
     *
     * @param integer $iDPolicyHolder
     * @return ContactsPolicyHolders
     */
    public function setIDPolicyHolder($iDPolicyHolder)
    {
        $this->iDPolicyHolder = $iDPolicyHolder;

        return $this;
    }

    /**
     * Get iDPolicyHolder
     *
     * @return integer 
     */
    public function getIDPolicyHolder()
    {
        return $this->iDPolicyHolder;
    }
}
