<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Radiateur
 *
 * @ORM\Table(name="radiateur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RadiateurRepository")
 */
class Radiateur
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
     * @ORM\Column(name="hauteur", type="integer")
     */
    private $hauteur;


    /**
     * @var int
     *
     * @ORM\Column(name="longueur", type="integer")
     */
    private $longueur;


    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type;


    /**
     * @var int
     *
     * @ORM\Column(name="puissance_delta_t50", type="integer")
     */
    private $puissanceDeltaT50;





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
     * Set hauteur.
     *
     * @param int $hauteur
     *
     * @return Radiateur
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur.
     *
     * @return int
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set longueur.
     *
     * @param int $longueur
     *
     * @return Radiateur
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;

        return $this;
    }

    /**
     * Get longueur.
     *
     * @return int
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set type.
     *
     * @param string $type
     *
     * @return Radiateur
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set puissanceDeltaT50.
     *
     * @param int $puissanceDeltaT50
     *
     * @return Radiateur
     */
    public function setPuissanceDeltaT50($puissanceDeltaT50)
    {
        $this->puissanceDeltaT50 = $puissanceDeltaT50;

        return $this;
    }

    /**
     * Get puissanceDeltaT50.
     *
     * @return int
     */
    public function getPuissanceDeltaT50()
    {
        return $this->puissanceDeltaT50;
    }
}
