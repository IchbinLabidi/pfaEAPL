<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MatiereRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=MatiereRepository::class)
 */
class Matiere
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
    private $id_mat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lib_mat;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $prix_mat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdMat(): ?string
    {
        return $this->id_mat;
    }

    public function setIdMat(string $id_mat): self
    {
        $this->id_mat = $id_mat;

        return $this;
    }

    public function getLibMat(): ?string
    {
        return $this->lib_mat;
    }

    public function setLibMat(string $lib_mat): self
    {
        $this->lib_mat = $lib_mat;

        return $this;
    }

    public function getPrixMat(): ?string
    {
        return $this->prix_mat;
    }

    public function setPrixMat(string $prix_mat): self
    {
        $this->prix_mat = $prix_mat;

        return $this;
    }
}
