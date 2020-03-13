<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HashRepository")
 */
class Hash
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $value;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hash_value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getHashValue(): ?string
    {
        return $this->hash_value;
    }

    public function setHashValue(string $hash_value): self
    {
        $this->hash_value = $hash_value;

        return $this;
    }
}
