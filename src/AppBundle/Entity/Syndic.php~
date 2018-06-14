<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Syndic
 *
 * @ORM\Table(name="syndic")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SyndicRepository")
 */
class Syndic
{
    /**
     * @ORM\OneToMany(targetEntity="CoPro", mappedBy="gestionnaire")
     */
    private $gestionnaires;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->nom;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;


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
     * Set nom.
     *
     * @param string|null $nom
     *
     * @return Syndic
     */
    public function setNom($nom = null)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string|null
     */
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->gestionnaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add gestionnaire.
     *
     * @param \AppBundle\Entity\CoPro $gestionnaire
     *
     * @return Syndic
     */
    public function addGestionnaire(\AppBundle\Entity\CoPro $gestionnaire)
    {
        $this->gestionnaires[] = $gestionnaire;

        return $this;
    }

    /**
     * Remove gestionnaire.
     *
     * @param \AppBundle\Entity\CoPro $gestionnaire
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeGestionnaire(\AppBundle\Entity\CoPro $gestionnaire)
    {
        return $this->gestionnaires->removeElement($gestionnaire);
    }

    /**
     * Get gestionnaires.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGestionnaires()
    {
        return $this->gestionnaires;
    }
}
