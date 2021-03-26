<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * DrinkInfo
 *
 * @ORM\Table(name="drink_info")
 * @ORM\Entity
 */
class DrinkInfo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="liter", type="integer", nullable=false)
     */
    private $liter;

    /**
     * @var int
     *
     * @ORM\Column(name="alcohol", type="integer", nullable=false)
     */
    private $alcohol;

    /**
     * @ORM\ManyToMany(targetEntity=DrinkType::class)
     */
    private $type;

    public function __construct()
    {
        $this->type = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLiter(): ?int
    {
        return $this->liter;
    }

    public function setLiter(int $liter): self
    {
        $this->liter = $liter;

        return $this;
    }

    public function getAlcohol(): ?int
    {
        return $this->alcohol;
    }

    public function setAlcohol(int $alcohol): self
    {
        $this->alcohol = $alcohol;

        return $this;
    }

    /**
     * @return Collection|DrinkType[]
     */
    public function getType(): Collection
    {
        return $this->type;
    }

    public function addType(DrinkType $type): self
    {
        if (!$this->type->contains($type)) {
            $this->type[] = $type;
        }

        return $this;
    }

    public function removeType(DrinkType $type): self
    {
        $this->type->removeElement($type);

        return $this;
    }


}
