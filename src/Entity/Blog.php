<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogRepository::class)
 */
class Blog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fichier;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $premiertitre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $deuxiemetitre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contentA;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contentB;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getFichier()
    {
        return $this->fichier;
    }

    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getPremiertitre(): ?string
    {
        return $this->premiertitre;
    }

    public function setPremiertitre(string $premiertitre): self
    {
        $this->premiertitre = $premiertitre;

        return $this;
    }

    public function getDeuxiemetitre(): ?string
    {
        return $this->deuxiemetitre;
    }

    public function setDeuxiemetitre(string $deuxiemetitre): self
    {
        $this->deuxiemetitre = $deuxiemetitre;

        return $this;
    }

    public function getContentA(): ?string
    {
        return $this->contentA;
    }

    public function setContentA(string $contentA): self
    {
        $this->contentA = $contentA;

        return $this;
    }

    public function getContentB(): ?string
    {
        return $this->contentB;
    }

    public function setContentB(string $contentB): self
    {
        $this->contentB = $contentB;

        return $this;
    }
}
