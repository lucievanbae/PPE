<?php

namespace HopitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre")
 * @ORM\Entity(repositoryClass="HopitalBundle\Repository\ChambreRepository")
 */
class Chambre
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var int
     * @ORM\Column(name="nbLits", type="integer")
     */
    private $nbLits;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbLits
     *
     * @param integer $nbLits
     *
     * @return Chambre
     */
    public function setNbLits($nbLits)
    {
        $this->nbLits = $nbLits;

        return $this;
    }

    /**
     * Get nbLits
     *
     * @return integer
     */
    public function getNbLits()
    {
        return $this->nbLits;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Chambre
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}
