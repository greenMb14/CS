<?php

namespace App\Entity;

use App\Repository\LikeAnnonceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LikeAnnonceRepository::class)
 */
class LikeAnnonce
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
     * @ORM\Column(type="string", length=255)
     */
    private $aimer;

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

    public function getAimer(): ?string
    {
        return $this->aimer;
    }

    public function setAimer(string $aimer): self
    {
        $this->aimer = $aimer;

        return $this;
    }
}
