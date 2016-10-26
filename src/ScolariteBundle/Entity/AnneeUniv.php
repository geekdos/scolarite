<?php

namespace ScolariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnneeUniv
 *
 * @ORM\Table(name="annee_univ")
 * @ORM\Entity(repositoryClass="ScolariteBundle\Repository\AnneeUnivRepository")
 */
class AnneeUniv
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="ceson", type="string", length=255)
     */
    private $ceson;


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
     * Set nom
     *
     * @param string $nom
     * @return AnneeUniv
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set ceson
     *
     * @param string $ceson
     * @return AnneeUniv
     */
    public function setCeson($ceson)
    {
        $this->ceson = $ceson;

        return $this;
    }

    /**
     * Get ceson
     *
     * @return string 
     */
    public function getCeson()
    {
        return $this->ceson;
    }
}
