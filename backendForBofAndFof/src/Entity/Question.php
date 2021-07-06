<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 * @ORM\Table(name="question")
 */

class Question extends Publications
{

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Subject;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $file;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $class;

    /**
     * @ORM\Column(type="boolean")
     */

    private $status;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="question", orphanRemoval=true)
     */
    private $comments;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }


    public function getSubject(): ?string
    {
        return $this->Subject;
    }

    public function setSubject(string $Subject): self
    {
        $this->Subject = $Subject;

        return $this;
    }


    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    public function getClass(): ?string
    {
        return $this->class;
    }

    public function setClass(string $class): self
    {
        $this->class = $class;

        return $this;
    }


    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setQuestion($this);
        }

        return $this;
    }


    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getQuestion() === $this) {
                $comment->setQuestion(null);
            }
        }

        return $this;
    }
}
