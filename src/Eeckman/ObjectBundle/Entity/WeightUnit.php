<?php

namespace Eeckman\ObjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * WeightUnit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\ObjectBundle\Repository\WeightUnitRepository")
 */
class WeightUnit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_WeightUnit", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=50)
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
     * @return WeightUnit
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
