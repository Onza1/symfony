<?php

namespace Eeckman\ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Materials
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\ObjectBundle\Repository\MaterialsRepository")
 */
class Materials
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_Material", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ShortName", type="string", length=50)
     */
    private $shortName;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Fragile", type="boolean")
     */
    private $fragile;


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
     * Set shortName
     *
     * @param string $shortName
     * @return Materials
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Materials
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set fragile
     *
     * @param boolean $fragile
     * @return Materials
     */
    public function setFragile($fragile)
    {
        $this->fragile = $fragile;

        return $this;
    }

    /**
     * Get fragile
     *
     * @return boolean 
     */
    public function getFragile()
    {
        return $this->fragile;
    }
}
