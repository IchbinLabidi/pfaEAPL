<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 * @ORM\Table(name="student")
 */
class Student extends User
{
    protected $discr = 'student';

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Class;


    public function getClass(): ?string
    {
        return $this->Class;
    }

    public function setClass(string $Class): self
    {
        $this->Class = $Class;

        return $this;
    }
}
