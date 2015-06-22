<?php

namespace Eeckman\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContactDetails
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\UserBundle\Repository\ContactDetailsRepository")
 */
class ContactDetails
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
     * @var string
     *
     * @ORM\Column(name="Label", type="string", length=30)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="Value", type="string", length=30)
     */
    private $value;

    /**
     *
     * @ORM\ManyToOne(targetEntity="ContactTypes")
     * @ORM\JoinColumn(name="ID_ContactType", referencedColumnName="id", nullable=true)
     */
    private $iDContactType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Principal", type="boolean")
     */
    private $principal;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Contacts")
     * @ORM\JoinColumn(name="ID_Contact", referencedColumnName="id", nullable=true)
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
     * Set label
     *
     * @param string $label
     * @return ContactDetails
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return ContactDetails
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set iDContactType
     *
     * @param integer $iDContactType
     * @return ContactDetails
     */
    public function setIDContactType($iDContactType)
    {
        $this->iDContactType = $iDContactType;

        return $this;
    }

    /**
     * Get iDContactType
     *
     * @return integer 
     */
    public function getIDContactType()
    {
        return $this->iDContactType;
    }

    /**
     * Set principal
     *
     * @param boolean $principal
     * @return ContactDetails
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * Get principal
     *
     * @return boolean 
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Set iDContact
     *
     * @param integer $iDContact
     * @return ContactDetails
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
