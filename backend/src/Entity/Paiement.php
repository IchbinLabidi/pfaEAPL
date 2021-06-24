<?php

namespace App\Entity;

use App\Repository\PaiementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PaiementRepository::class)
 */
class Paiement
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
    private $id_paiement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_paiement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPaiement(): ?string
    {
        return $this->id_paiement;
    }

    public function setIdPaiement(string $id_paiement): self
    {
        $this->id_paiement = $id_paiement;

        return $this;
    }

    public function getDatePaiement(): ?string
    {
        return $this->date_paiement;
    }

    public function setDatePaiement(string $date_paiement): self
    {
        $this->date_paiement = $date_paiement;

        return $this;
    }
}
