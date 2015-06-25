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


    public $file;


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
     * Get AbsolutePath
     *
     * @return string
     */
    public function getAbsolutePath()
    {
        return null === $this->linkToPicture ? null : $this->getUploadRootDir().'/'.$this->linkToPicture;
    }

    /**
     * Get WebPath
     *
     * @return string
     */
    public function getWebPath()
    {
        return null === $this->linkToPicture ? null : $this->getUploadDir().'/'.$this->linkToPicture;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/pictures';
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

    public function upload()
    {
        // la propriété « file » peut être vide si le champ n'est pas requis
        if (null === $this->file) {
            return;
        }

        // utilisez le nom de fichier original ici mais
        // vous devriez « l'assainir » pour au moins éviter
        // quelconques problèmes de sécurité

        // la méthode « move » prend comme arguments le répertoire cible et
        // le nom de fichier cible où le fichier doit être déplacé
        $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

        // définit la propriété « path » comme étant le nom de fichier où vous
        // avez stocké le fichier
        $this->linkToPicture = $this->getUploadDir().'/'.$this->file->getClientOriginalName();

        // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
        $this->file = null;
    }
}
