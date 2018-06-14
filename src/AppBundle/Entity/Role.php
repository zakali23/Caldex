<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RoleRepository")
 */
class Role
{
    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="statut")
     */
    private $statuts;

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this ->nom;
    }

    public function __construct()
    {
        $this->statuts = new ArrayCollection();
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
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
     * @param string $nom
     *
     * @return Role
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Add statut.
     *
     * @param \AppBundle\Entity\User $statut
     *
     * @return Role
     */
    public function addStatut(\AppBundle\Entity\User $statut)
    {
        $this->statuts[] = $statut;

        return $this;
    }

    /**
     * Remove statut.
     *
     * @param \AppBundle\Entity\User $statut
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeStatut(\AppBundle\Entity\User $statut)
    {
        return $this->statuts->removeElement($statut);
    }

    /**
     * Get statuts.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStatuts()
    {
        return $this->statuts;
    }
}
