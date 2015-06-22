<?php

namespace Eeckman\PolicyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PolicyHolders
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\PolicyBundle\Repository\PolicyHoldersRepository")
 */
class PolicyHolders
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
     * @ORM\JoinColumn(name="ID_Contact", referencedColumnName="id")
     */
    private $iDContact;

    /**
     * @var string
     *
     * @ORM\Column(name="ClientReference", type="string", length=50, nullable=true)
     */
    private $clientReference;


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
     * @return PolicyHolders
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
     * Set clientReference
     *
     * @param string $clientReference
     * @return PolicyHolders
     */
    public function setClientReference($clientReference)
    {
        $this->clientReference = $clientReference;

        return $this;
    }

    /**
     * Get clientReference
     *
     * @return string 
     */
    public function getClientReference()
    {
        return $this->clientReference;
    }
}
