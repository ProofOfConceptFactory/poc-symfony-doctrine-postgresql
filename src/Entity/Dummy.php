<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\DummyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DummyRepository::class)]
class Dummy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
