<?php

namespace ElislamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BlogCat
 *
 * @ORM\Table(name="blog_cat")
 * @ORM\Entity(repositoryClass="ElislamBundle\Repository\BlogCatRepository")
 */
class BlogCat
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
     * @ORM\Column(name="categorie", type="string", length=255)
     * @ORM\OneToMany(targetEntity="ElislamBundle\Entity\Blog", mappedBy="categorie_id")
     *
     */
    private $categorie;


    /**
     * @var string
     *
     * @ORM\Column(name="shortwords", type="string", length=255)
     */
    private $shortwords;


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
     * Set categorie
     *
     * @param string $categorie
     *
     * @return BlogCat
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set shortwords
     *
     * @param string $shortwords
     *
     * @return BlogCat
     */
    public function setShortwords($shortwords)
    {
        $this->shortwords = $shortwords;

        return $this;
    }

    /**
     * Get shortwords
     *
     * @return string
     */
    public function getShortwords()
    {
        return $this->shortwords;
    }

    public function __toString()
    {
        return $this->categorie.' '.$this->getShortwords();
    }
}

