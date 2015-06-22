<?php

namespace Eeckman\ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * PicturesObjects
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\ObjectBundle\Repository\PicturesObjectsRepository")
 */
class PicturesObjects
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
     * @ORM\ManyToOne(targetEntity="Pictures")
     * @ORM\JoinColumn(name="ID_Picture", referencedColumnName="id", nullable=false)
     * @Assert\NotBlank()
     */
    private $iDPicture;

    /**
     * @ORM\ManyToOne(targetEntity="Objects")
     * @ORM\JoinColumn(name="ID_Object",referencedColumnName="id", nullable=false)
     * @Assert\NotBlank()
     */
    private $iDObject;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Principal", type="boolean")
     */
    private $principal;




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
     * Set principal
     *
     * @param boolean $principal
     * @return PicturesObjects
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
     * Set iDPicture
     *
     * @param \Eeckman\ObjectBundle\Entity\Pictures $iDPicture
     * @return PicturesObjects
     */
    public function setIDPicture(\Eeckman\ObjectBundle\Entity\Pictures $iDPicture)
    {
        $this->iDPicture = $iDPicture;

        return $this;
    }

    /**
     * Get iDPicture
     *
     * @return \Eeckman\ObjectBundle\Entity\Pictures 
     */
    public function getIDPicture()
    {
        return $this->iDPicture;
    }

    /**
     * Set iDObject
     *
     * @param \Eeckman\ObjectBundle\Entity\Objects $iDObject
     * @return PicturesObjects
     */
    public function setIDObject(\Eeckman\ObjectBundle\Entity\Objects $iDObject)
    {
        $this->iDObject = $iDObject;

        return $this;
    }

    /**
     * Get iDObject
     *
     * @return \Eeckman\ObjectBundle\Entity\Object 
     */
    public function getIDObject()
    {
        return $this->iDObject;
    }
}
