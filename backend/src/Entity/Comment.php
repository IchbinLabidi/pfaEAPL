<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 * @ORM\Table(name="comment")
 */
class Comment extends Publications
{
    protected $discr = 'comment';


    /**
     * @ORM\ManyToOne(targetEntity=Information::class, inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $information;

    /**
     * @ORM\ManyToOne(targetEntity=Question::class, inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;
    

    public function getInformation(): ?Information
    {
        return $this->information;
    }

    public function setInformation(?Information $information): self
    {
        $this->information = $information;

        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): self
    {
        $this->question = $question;

        return $this;
    }
    
}
