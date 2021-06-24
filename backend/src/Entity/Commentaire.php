<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
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
    private $id_commentaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenue;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date_publier;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $nb_likes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCommentaire(): ?string
    {
        return $this->id_commentaire;
    }

    public function setIdCommentaire(string $id_commentaire): self
    {
        $this->id_commentaire = $id_commentaire;

        return $this;
    }

    public function getContenue(): ?string
    {
        return $this->contenue;
    }

    public function setContenue(string $contenue): self
    {
        $this->contenue = $contenue;

        return $this;
    }

    public function getDatePublier(): ?string
    {
        return $this->date_publier;
    }

    public function setDatePublier(string $date_publier): self
    {
        $this->date_publier = $date_publier;

        return $this;
    }

    public function getNbLikes(): ?string
    {
        return $this->nb_likes;
    }

    public function setNbLikes(string $nb_likes): self
    {
        $this->nb_likes = $nb_likes;

        return $this;
    }
}
