<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AnnonceRepository::class)
 */
class Annonce
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resumer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $file;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $first_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ContentA;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $second_title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ContentB;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $thirt_title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ContentC;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->Category;
    }

    public function setCategory(string $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getResumer(): ?string
    {
        return $this->resumer;
    }

    public function setResumer(string $resumer): self
    {
        $this->resumer = $resumer;

        return $this;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    public function getFirstTitle(): ?string
    {
        return $this->first_title;
    }

    public function setFirstTitle(string $first_title): self
    {
        $this->first_title = $first_title;

        return $this;
    }

    public function getContentA(): ?string
    {
        return $this->ContentA;
    }

    public function setContentA(string $ContentA): self
    {
        $this->ContentA = $ContentA;

        return $this;
    }

    public function getSecondTitle(): ?string
    {
        return $this->second_title;
    }

    public function setSecondTitle(?string $second_title): self
    {
        $this->second_title = $second_title;

        return $this;
    }

    public function getContentB(): ?string
    {
        return $this->ContentB;
    }

    public function setContentB(?string $ContentB): self
    {
        $this->ContentB = $ContentB;

        return $this;
    }

    public function getThirtTitle(): ?string
    {
        return $this->thirt_title;
    }

    public function setThirtTitle(?string $thirt_title): self
    {
        $this->thirt_title = $thirt_title;

        return $this;
    }

    public function getContentC(): ?string
    {
        return $this->ContentC;
    }

    public function setContentC(?string $ContentC): self
    {
        $this->ContentC = $ContentC;

        return $this;
    }
}
