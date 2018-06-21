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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\associationCoPro", inversedBy="assoCoPros")
     * @ORM\JoinColumn(nullable=true)
     */
    private $copro;

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
        $this->cotests = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @param \AppBundle\Entity\Syndic $gestionnaire
     *
     * @return CoPro
     */
    public function setGestionnaire(\AppBundle\Entity\Syndic $gestionnaire)
    {
        $this->gestionnaire = $gestionnaire;

        return $this;
    }

    /**
     * Get gestionnaire.
     *
     * @return \AppBundle\Entity\Syndic
     */
    public function getGestionnaire()
    {
        return $this->gestionnaire;
    }

    /**
     * Add cotest.
     *
     * @param \AppBundle\Entity\associationCoPro $cotest
     *
     * @return CoPro
     */
    public function addCotest(\AppBundle\Entity\associationCoPro $cotest)
    {
        $this->cotests[] = $cotest;

        return $this;
    }

    /**
     * Remove cotest.
     *
     * @param \AppBundle\Entity\associationCoPro $cotest
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCotest(\AppBundle\Entity\associationCoPro $cotest)
    {
        return $this->cotests->removeElement($cotest);
    }

    /**
     * Get cotests.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCotests()
    {
        return $this->cotests;
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

    /**
     * Set copro.
     *
     * @param \AppBundle\Entity\associationCoPro|null $copro
     *
     * @return CoPro
     */
    public function setCopro(\AppBundle\Entity\associationCoPro $copro = null)
    {
        $this->copro = $copro;

        return $this;
    }

    /**
     * Get copro.
     *
     * @return \AppBundle\Entity\associationCoPro|null
     */
    public function getCopro()
    {
        return $this->copro;
    }
}
