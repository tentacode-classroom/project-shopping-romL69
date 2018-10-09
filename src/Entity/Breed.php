<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BreedRepository")
 */
class Breed
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Dog", mappedBy="breed")
     */
    private $dog_id;

    public function __construct()
    {
        $this->dog_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Dog[]
     */
    public function getDogId(): Collection
    {
        return $this->dog_id;
    }

    public function addDogId(Dog $dogId): self
    {
        if (!$this->dog_id->contains($dogId)) {
            $this->dog_id[] = $dogId;
            $dogId->setBreed($this);
        }

        return $this;
    }

    public function removeDogId(Dog $dogId): self
    {
        if ($this->dog_id->contains($dogId)) {
            $this->dog_id->removeElement($dogId);
            // set the owning side to null (unless already changed)
            if ($dogId->getBreed() === $this) {
                $dogId->setBreed(null);
            }
        }

        return $this;
    }
}
