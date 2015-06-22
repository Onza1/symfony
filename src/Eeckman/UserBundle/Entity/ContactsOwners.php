<?php

namespace Eeckman\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactsOwners
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\UserBundle\Repository\ContactsOwnersRepository")
 */
class ContactsOwners
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
     * @ORM\Column(name="ID_Contact", type="integer", nullable=true)
     */
    private $iDContact;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Owner", type="integer", nullable=true)
     */
    private $iDOwner;


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
     * @return ContactsOwners
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
     * Set iDOwner
     *
     * @param integer $iDOwner
     * @return ContactsOwners
     */
    public function setIDOwner($iDOwner)
    {
        $this->iDOwner = $iDOwner;

        return $this;
    }

    /**
     * Get iDOwner
     *
     * @return integer 
     */
    public function getIDOwner()
    {
        return $this->iDOwner;
    }
}
