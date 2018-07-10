<?php

namespace ElislamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Les
 *
 * @ORM\Table(name="les")
 * @ORM\Entity(repositoryClass="ElislamBundle\Repository\LesRepository")
 */
class Les
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
     * @ORM\Column(name="naam", type="string", length=255)
     */
    private $naam;

    /**
     * @var string
     *
     * @ORM\Column(name="docent", type="string", length=255)
     */
    private $docent;

    /**
     * @var string
     *
     * @ORM\Column(name="kind", type="string", length=255)
     */
    private $kind;

    /**
     * @var string
     *
     * @ORM\Column(name="groep", type="string", length=255)
     */
    private $groep;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startmoment", type="datetime")
     */
    private $startmoment;

    /**
     * @var string
     *
     * @ORM\Column(name="endmoment", type="datetime")
     */
    private $endmoment;


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
     * Set naam
     *
     * @param string $naam
     *
     * @return Les
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set docent
     *
     * @param string $docent
     *
     * @return Les
     */
    public function setDocent($docent)
    {
        $this->docent = $docent;

        return $this;
    }

    /**
     * Get docent
     *
     * @return string
     */
    public function getDocent()
    {
        return $this->docent;
    }

    /**
     * Set kind
     *
     * @param string $kind
     *
     * @return Les
     */
    public function setKind($kind)
    {
        $this->kind = $kind;

        return $this;
    }

    /**
     * Get kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Set groep
     *
     * @param string $groep
     *
     * @return Les
     */
    public function setGroep($groep)
    {
        $this->groep = $groep;

        return $this;
    }

    /**
     * Get groep
     *
     * @return string
     */
    public function getGroep()
    {
        return $this->groep;
    }

    /**
     * Set startmoment
     *
     * @param \DateTime $startmoment
     *
     * @return Les
     */
    public function setStartmoment($startmoment)
    {
        $this->startmoment = $startmoment;

        return $this;
    }

    /**
     * Get startmoment
     *
     * @return \DateTime
     */
    public function getStartmoment()
    {
        return $this->startmoment;
    }

    /**
     * Set endmoment
     *
     * @param string $endmoment
     *
     * @return Les
     */
    public function setEndmoment($endmoment)
    {
        $this->endmoment = $endmoment;

        return $this;
    }

    /**
     * Get endmoment
     *
     * @return string
     */
    public function getEndmoment()
    {
        return $this->endmoment;
    }
}

