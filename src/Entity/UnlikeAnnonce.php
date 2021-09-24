<?php

namespace App\Entity;

use App\Repository\UnlikeAnnonceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UnlikeAnnonceRepository::class)
 */
class UnlikeAnnonce
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $id_annonce;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $detester;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAnnonce(): ?string
    {
        return $this->id_annonce;
    }

    public function setIdAnnonce(string $id_annonce): self
    {
        $this->id_annonce = $id_annonce;

        return $this;
    }

    public function getDetester(): ?string
    {
        return $this->detester;
    }

    public function setDetester(string $detester): self
    {
        $this->detester = $detester;

        return $this;
    }
}
