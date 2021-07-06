<?php

namespace App\Entity;

use App\Repository\TeacherRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass=TeacherRepository::class)
 * @ORM\Table(name="Teacher")
 */
class Teacher extends User
{
    protected $discr = 'teacher';
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="float")
     */
    private $ratingNb;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $Speciality;




    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getRatingNb(): ?float
    {
        return $this->ratingNb;
    }

    public function setRatingNb(float $ratingNb): self
    {
        $this->ratingNb = $ratingNb;

        return $this;
    }

    public function getSpeciality(): ?string
    {
        return $this->Speciality;
    }

    public function setSpeciality(string $Speciality): self
    {
        $this->Speciality = $Speciality;

        return $this;
    }
}
