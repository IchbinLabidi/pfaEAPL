<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\EleveRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=EleveRepository::class)
 */
class Eleve
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
    private $mat_ele;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $num_tlf_parent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_parent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_parent;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $parent_job;

    /**
     * @ORM\Column(type="boolean")
     */
    private $assurence;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatEle(): ?string
    {
        return $this->mat_ele;
    }

    public function setMatEle(string $mat_ele): self
    {
        $this->mat_ele = $mat_ele;

        return $this;
    }

    public function getNumTlfParent(): ?string
    {
        return $this->num_tlf_parent;
    }

    public function setNumTlfParent(string $num_tlf_parent): self
    {
        $this->num_tlf_parent = $num_tlf_parent;

        return $this;
    }

    public function getNomParent(): ?string
    {
        return $this->nom_parent;
    }

    public function setNomParent(string $nom_parent): self
    {
        $this->nom_parent = $nom_parent;

        return $this;
    }

    public function getPrenomParent(): ?string
    {
        return $this->prenom_parent;
    }

    public function setPrenomParent(string $prenom_parent): self
    {
        $this->prenom_parent = $prenom_parent;

        return $this;
    }

    public function getParentJob(): ?string
    {
        return $this->parent_job;
    }

    public function setParentJob(?string $parent_job): self
    {
        $this->parent_job = $parent_job;

        return $this;
    }

    public function getAssurence(): ?bool
    {
        return $this->assurence;
    }

    public function setAssurence(bool $assurence): self
    {
        $this->assurence = $assurence;

        return $this;
    }
}
