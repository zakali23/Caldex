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
}
