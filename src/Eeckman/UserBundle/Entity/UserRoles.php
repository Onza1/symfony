<?php

namespace Eeckman\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * UserRoles
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Eeckman\UserBundle\Repository\UserRolesRepository")
 */
class UserRoles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_UserRole", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="UserRoleLabel", type="string", length=50)
     */
    private $userRoleLabel;


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
     * Set userRoleLabel
     *
     * @param string $userRoleLabel
     * @return UserRoles
     */
    public function setUserRoleLabel($userRoleLabel)
    {
        $this->userRoleLabel = $userRoleLabel;

        return $this;
    }

    /**
     * Get userRoleLabel
     *
     * @return string 
     */
    public function getUserRoleLabel()
    {
        return $this->userRoleLabel;
    }
}
