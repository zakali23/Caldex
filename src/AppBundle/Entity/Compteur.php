<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compteur
 *
 * @ORM\Table(name="compteur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompteurRepository")
 */
class Compteur
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Piece", inversedBy="compteurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $compteur;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeCompteur", inversedBy="categorieCompteurs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorieCompteur;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\FournisseurCompteur", inversedBy="marques")
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Mesure", mappedBy="releve")
     */
    private $releves;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Radiateur", cascade={"persist"})
     */
    private $radiateur;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="serialNumber", type="integer", unique=true)
     */
    private $serialNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="text", nullable=true)
     */
    private $photo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInstallation", type="datetime")
     */
    private $dateInstallation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAchat", type="datetime")
     */
    private $dateAchat;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set serialNumber.
     *
     * @param int $serialNumber
     *
     * @return Compteur
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Get serialNumber.
     *
     * @return int
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set photo.
     *
     * @param string|null $photo
     *
     * @return Compteur
     */
    public function setPhoto($photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo.
     *
     * @return string|null
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set dateInstallation.
     *
     * @param \DateTime $dateInstallation
     *
     * @return Compteur
     */
    public function setDateInstallation($dateInstallation)
    {
        $this->dateInstallation = $dateInstallation;

        return $this;
    }

    /**
     * Get dateInstallation.
     *
     * @return \DateTime
     */
    public function getDateInstallation()
    {
        return $this->dateInstallation;
    }

    /**
     * Set dateAchat.
     *
     * @param \DateTime $dateAchat
     *
     * @return Compteur
     */
    public function setDateAchat($dateAchat)
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    /**
     * Get dateAchat.
     *
     * @return \DateTime
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * Set compteur.
     *
     * @param \AppBundle\Entity\Piece $compteur
     *
     * @return Compteur
     */
    public function setCompteur(\AppBundle\Entity\Piece $compteur)
    {
        $this->compteur = $compteur;

        return $this;
    }

    /**
     * Get compteur.
     *
     * @return \AppBundle\Entity\Piece
     */
    public function getCompteur()
    {
        return $this->compteur;
    }

    /**
     * Set categorieCompteur.
     *
     * @param \AppBundle\Entity\TypeCompteur $categorieCompteur
     *
     * @return Compteur
     */
    public function setCategorieCompteur(\AppBundle\Entity\TypeCompteur $categorieCompteur)
    {
        $this->categorieCompteur = $categorieCompteur;

        return $this;
    }

    /**
     * Get categorieCompteur.
     *
     * @return \AppBundle\Entity\TypeCompteur
     */
    public function getCategorieCompteur()
    {
        return $this->categorieCompteur;
    }

    /**
     * Set marque.
     *
     * @param \AppBundle\Entity\FournisseurCompteur $marque
     *
     * @return Compteur
     */
    public function setMarque(\AppBundle\Entity\FournisseurCompteur $marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque.
     *
     * @return \AppBundle\Entity\FournisseurCompteur
     */
    public function getMarque()
    {
        return $this->marque;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->releves = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add relefe.
     *
     * @param \AppBundle\Entity\Mesure $relefe
     *
     * @return Compteur
     */
    public function addRelefe(\AppBundle\Entity\Mesure $relefe)
    {
        $this->releves[] = $relefe;

        return $this;
    }

    /**
     * Remove relefe.
     *
     * @param \AppBundle\Entity\Mesure $relefe
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeRelefe(\AppBundle\Entity\Mesure $relefe)
    {
        return $this->releves->removeElement($relefe);
    }

    /**
     * Get releves.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReleves()
    {
        return $this->releves;
    }

    /**
     * Set radiateur.
     *
     * @param \AppBundle\Entity\Radiateur|null $radiateur
     *
     * @return Compteur
     */
    public function setRadiateur(\AppBundle\Entity\Radiateur $radiateur = null)
    {
        $this->radiateur = $radiateur;

        return $this;
    }

    /**
     * Get radiateur.
     *
     * @return \AppBundle\Entity\Radiateur|null
     */
    public function getRadiateur()
    {
        return $this->radiateur;
    }
}
