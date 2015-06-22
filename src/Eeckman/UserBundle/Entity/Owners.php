<?php

namespace Eeckman\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Owners
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\UserBundle\Repository\OwnersRepository")
 */
class Owners
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
     * @ORM\Column(name="ID_Contact", type="integer")
     */
    private $iDContact;


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
     * @return Owners
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
}
