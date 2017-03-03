<?php

namespace HopitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lit
 *
 * @ORM\Table(name="lit")
 * @ORM\Entity(repositoryClass="HopitalBundle\Repository\LitRepository")
 */
class Lit
{
    /**
     * @var Service $leService
     *
     * @ORM\ManyToOne(targetEntity="Service")
     */
    private $leService;

    /**
     * @var Chambre $laChambre
     *
     * @ORM\ManyToOne(targetEntity="Chambre")
     */
    private $laChambre;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


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
     * Set leService
     *
     * @param \HopitalBundle\Entity\Service $leService
     *
     * @return Lit
     */
    public function setLeService(\HopitalBundle\Entity\Service $leService = null)
    {
        $this->leService = $leService;

        return $this;
    }

    /**
     * Get leService
     *
     * @return \HopitalBundle\Entity\Service
     */
    public function getLeService()
    {
        return $this->leService;
    }

    /**
     * Set laChambre
     *
     * @param \HopitalBundle\Entity\Chambre $laChambre
     *
     * @return Lit
     */
    public function setLaChambre(\HopitalBundle\Entity\Chambre $laChambre = null)
    {
        $this->laChambre = $laChambre;

        return $this;
    }

    /**
     * Get laChambre
     *
     * @return \HopitalBundle\Entity\Chambre
     */
    public function getLaChambre()
    {
        return $this->laChambre;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Lit
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
