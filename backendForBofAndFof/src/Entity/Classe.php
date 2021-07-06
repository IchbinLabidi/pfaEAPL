<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClasseRepository::class)
 */
class Classe
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
    private $id_classe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lib_class;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClasse(): ?string
    {
        return $this->id_classe;
    }

    public function setIdClasse(string $id_classe): self
    {
        $this->id_classe = $id_classe;

        return $this;
    }

    public function getLibClass(): ?string
    {
        return $this->lib_class;
    }

    public function setLibClass(string $lib_class): self
    {
        $this->lib_class = $lib_class;

        return $this;
    }
}
