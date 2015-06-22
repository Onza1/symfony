<?php

namespace Eeckman\ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Pictures
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\ObjectBundle\Repository\PicturesRepository")
 */
class Pictures
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
     * @ORM\Column(name="LinkToPicture", type="string", length=255)
     */
    private $linkToPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description;


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
     * Set linkToPicture
     *
     * @param string $linkToPicture
     * @return Pictures
     */
    public function setLinkToPicture($linkToPicture)
    {
        $this->linkToPicture = $linkToPicture;

        return $this;
    }

    /**
     * Get linkToPicture
     *
     * @return string 
     */
    public function getLinkToPicture()
    {
        return $this->linkToPicture;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Pictures
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
}
