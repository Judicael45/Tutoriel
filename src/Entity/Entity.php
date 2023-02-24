<?php

namespace App\Entity;

use App\Repository\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntityRepository::class)]
class Entity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $return = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReturn(): ?string
    {
        return $this->return;
    }

    public function setReturn(string $return): self
    {
        $this->return = $return;

        return $this;
    }
}
