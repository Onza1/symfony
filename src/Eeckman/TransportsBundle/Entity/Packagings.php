<?php

namespace Eeckman\TransportsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Packagings
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\TransportsBundle\Repository\PackagingsRepository")
 */
class Packagings
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
     * @ORM\Column(name="Value", type="string", length=255)
     */
    private $value;


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
     * Set value
     *
     * @param string $value
     * @return Packagings
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
}
