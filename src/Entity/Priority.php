<?php

namespace App\Entity;

use App\Repository\PriorityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PriorityRepository::class)
 */
class Priority
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Priority;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPriority(): ?int
    {
        return $this->Priority;
    }

    public function setPriority(int $Priority): self
    {
        $this->Priority = $Priority;

        return $this;
    }
}
