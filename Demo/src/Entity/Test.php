<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestRepository::class)
 */
class Test
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $damien;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDamien(): ?string
    {
        return $this->damien;
    }

    public function setDamien(?string $damien): self
    {
        $this->damien = $damien;

        return $this;
    }
}
