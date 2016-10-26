<?php
/**
 * Created by PhpStorm.
 * User: theXuser
 * Date: 26/10/2016
 * Time: 03:20
 */

namespace ScolariteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtudiantLicence
 *
 * @ORM\Table(name="etudiant_licence")
 * @ORM\Entity(repositoryClass="ScolariteBundle\Repository\EtudiantRepository")
 */
class Etudiant
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
     * @ORM\Column(name="cne", type="string", length=10)
     */
    private $cne;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=10)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var bool
     *
     * @ORM\Column(name="handicap", type="boolean")
     */
    private $handicap;

    /**
     * @var bool
     *
     * @ORM\Column(name="bourse", type="boolean")
     */
    private $bourse;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuNaiss", type="string", length=255)
     */
    private $lieuNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="dateNaiss", type="date", length=255)
     */
    private $dateNaiss;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=20)
     */
    private $cin;

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->nom . ' ' . $this->prenom . ' ' . $this->cne;
    }

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
     * Set cne
     *
     * @param string $cne
     * @return Etudiant
     */
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }

    /**
     * Get cne
     *
     * @return string 
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set nationalite
     *
     * @param string $nationalite
     * @return Etudiant
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get nationalite
     *
     * @return string 
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Etudiant
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
     * Set prenom
     *
     * @param string $prenom
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Etudiant
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set handicap
     *
     * @param boolean $handicap
     * @return Etudiant
     */
    public function setHandicap($handicap)
    {
        $this->handicap = $handicap;

        return $this;
    }

    /**
     * Get handicap
     *
     * @return boolean 
     */
    public function getHandicap()
    {
        return $this->handicap;
    }

    /**
     * Set bourse
     *
     * @param boolean $bourse
     * @return Etudiant
     */
    public function setBourse($bourse)
    {
        $this->bourse = $bourse;

        return $this;
    }

    /**
     * Get bourse
     *
     * @return boolean 
     */
    public function getBourse()
    {
        return $this->bourse;
    }

    /**
     * Set lieuNaiss
     *
     * @param string $lieuNaiss
     * @return Etudiant
     */
    public function setLieuNaiss($lieuNaiss)
    {
        $this->lieuNaiss = $lieuNaiss;

        return $this;
    }

    /**
     * Get lieuNaiss
     *
     * @return string 
     */
    public function getLieuNaiss()
    {
        return $this->lieuNaiss;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     * @return Etudiant
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime 
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Etudiant
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }
}
