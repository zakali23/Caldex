<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CoPro
 *
 * @ORM\Table(name="co_pro")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CoProRepository")
 */
class CoPro
{
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Syndic", inversedBy="gestionnaires")
     * @ORM\JoinColumn(nullable=true)
     */
    private $gestionnaire;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\associationCoPro", inversedBy="assoCopros")
     * @ORM\JoinColumn(nullable=true)
     */
    private $copropriete;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Immeuble", mappedBy="batiment")
     */
    private $batiments;


    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->name;
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text")
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="codePostal", type="integer")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;



    /**
     * Constructor
     */
    public function __construct()
    {
        $this->batiments = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name.
     *
     * @param string $name
     *
     * @return CoPro
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set adresse.
     *
     * @param string $adresse
     *
     * @return CoPro
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse.
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostal.
     *
     * @param int $codePostal
     *
     * @return CoPro
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal.
     *
     * @return int
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville.
     *
     * @param string $ville
     *
     * @return CoPro
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville.
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set gestionnaire.
     *
     * @param \AppBundle\Entity\Syndic|null $gestionnaire
     *
     * @return CoPro
     */
    public function setGestionnaire(\AppBundle\Entity\Syndic $gestionnaire = null)
    {
        $this->gestionnaire = $gestionnaire;

        return $this;
    }

    /**
     * Get gestionnaire.
     *
     * @return \AppBundle\Entity\Syndic|null
     */
    public function getGestionnaire()
    {
        return $this->gestionnaire;
    }

    /**
     * Set copropriete.
     *
     * @param \AppBundle\Entity\associationCoPro|null $copropriete
     *
     * @return CoPro
     */
    public function setCopropriete(\AppBundle\Entity\associationCoPro $copropriete = null)
    {
        $this->copropriete = $copropriete;

        return $this;
    }

    /**
     * Get copropriete.
     *
     * @return \AppBundle\Entity\associationCoPro|null
     */
    public function getCopropriete()
    {
        return $this->copropriete;
    }

    /**
     * Add batiment.
     *
     * @param \AppBundle\Entity\Immeuble $batiment
     *
     * @return CoPro
     */
    public function addBatiment(\AppBundle\Entity\Immeuble $batiment)
    {
        $this->batiments[] = $batiment;

        return $this;
    }

    /**
     * Remove batiment.
     *
     * @param \AppBundle\Entity\Immeuble $batiment
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeBatiment(\AppBundle\Entity\Immeuble $batiment)
    {
        return $this->batiments->removeElement($batiment);
    }

    /**
     * Get batiments.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBatiments()
    {
        return $this->batiments;
    }
}
