<?php

namespace HopitalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="HopitalBundle\Repository\PatientRepository")
 */
class Patient
{
    /**
     * @ORM\ManyToMany(targetEntity="Sejour")
     */
    private $sejours;

    /**
     * @var Service $leService
     *
     * @ORM\ManyToOne(targetEntity="Service")
     */
    private $leService;

    /**
    * @ORM\OneToOne(targetEntity="Chambre")
    */
    private $chambre;

    /**
    * @ORM\OneToOne(targetEntity="Lit")
    */
    private $lit;

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
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime")
     */
    private $dateNaissance;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Patient
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
     *
     * @return Patient
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
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Patient
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set leService
     *
     * @param \HopitalBundle\Entity\Service $leService
     *
     * @return Patient
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
     * Set chambre
     *
     * @param \HopitalBundle\Entity\Chambre $chambre
     *
     * @return Patient
     */
    public function setChambre(\HopitalBundle\Entity\Chambre $chambre = null)
    {
        $this->chambre = $chambre;

        return $this;
    }

    /**
     * Get chambre
     *
     * @return \HopitalBundle\Entity\Chambre
     */
    public function getChambre()
    {
        return $this->chambre;
    }

    /**
     * Set lit
     *
     * @param \HopitalBundle\Entity\Lit $lit
     *
     * @return Patient
     */
    public function setLit(\HopitalBundle\Entity\Lit $lit = null)
    {
        $this->lit = $lit;

        return $this;
    }

    /**
     * Get lit
     *
     * @return \HopitalBundle\Entity\Lit
     */
    public function getLit()
    {
        return $this->lit;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sejours = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add sejour
     *
     * @param \HopitalBundle\Entity\Sejour $sejour
     *
     * @return Patient
     */
    public function addSejour(\HopitalBundle\Entity\Sejour $sejour)
    {
        $this->sejours[] = $sejour;

        return $this;
    }

    /**
     * Remove sejour
     *
     * @param \HopitalBundle\Entity\Sejour $sejour
     */
    public function removeSejour(\HopitalBundle\Entity\Sejour $sejour)
    {
        $this->sejours->removeElement($sejour);
    }

    /**
     * Get sejours
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSejours()
    {
        return $this->sejours;
    }
}
