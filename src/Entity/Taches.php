<?php

namespace App\Entity;

use App\Repository\TachesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TachesRepository::class)
 */
class Taches
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="taches")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Taches;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaches(): ?Users
    {
        return $this->Taches;
    }

    public function setTaches(?Users $Taches): self
    {
        $this->Taches = $Taches;

        return $this;
    }
}
