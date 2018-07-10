<?php

namespace ElislamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lesstof
 *
 * @ORM\Table(name="lesstof")
 * @ORM\Entity(repositoryClass="ElislamBundle\Repository\LesstofRepository")
 */
class Lesstof
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
     * @ORM\Column(name="lesid", type="string", length=255)
     */
    private $lesid;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="datetime", type="string", length=255)
     */
    private $datetime;


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
     * Set lesid
     *
     * @param string $lesid
     *
     * @return Lesstof
     */
    public function setLesid($lesid)
    {
        $this->lesid = $lesid;

        return $this;
    }

    /**
     * Get lesid
     *
     * @return string
     */
    public function getLesid()
    {
        return $this->lesid;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Lesstof
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set datetime
     *
     * @param string $datetime
     *
     * @return Lesstof
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return string
     */
    public function getDatetime()
    {
        return $this->datetime;
    }
}

