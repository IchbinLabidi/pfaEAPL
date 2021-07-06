<?php

namespace App\Entity;

use App\Repository\NiveauRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NiveauRepository::class)
 */
class Niveau
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
    private $id_niveau;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lib_niv;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdNiveau(): ?string
    {
        return $this->id_niveau;
    }

    public function setIdNiveau(string $id_niveau): self
    {
        $this->id_niveau = $id_niveau;

        return $this;
    }

    public function getLibNiv(): ?string
    {
        return $this->lib_niv;
    }

    public function setLibNiv(string $lib_niv): self
    {
        $this->lib_niv = $lib_niv;

        return $this;
    }
}
