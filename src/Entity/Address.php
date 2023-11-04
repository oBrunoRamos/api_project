<?php

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AddressRepository::class)]
class Address
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $street = null;

    #[ORM\OneToMany(mappedBy: 'address', targetEntity: Pearson::class)]
    private Collection $pearsons;

    public function __construct()
    {
        $this->pearsons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): static
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return Collection<int, Pearson>
     */
    public function getPearsons(): Collection
    {
        return $this->pearsons;
    }

    public function addPearson(Pearson $pearson): static
    {
        if (!$this->pearsons->contains($pearson)) {
            $this->pearsons->add($pearson);
            $pearson->setAddress($this);
        }

        return $this;
    }

    public function removePearson(Pearson $pearson): static
    {
        if ($this->pearsons->removeElement($pearson)) {
            // set the owning side to null (unless already changed)
            if ($pearson->getAddress() === $this) {
                $pearson->setAddress(null);
            }
        }

        return $this;
    }
}
