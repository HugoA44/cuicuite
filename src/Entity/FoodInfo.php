<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FoodInfo
 *
 * @ORM\Table(name="food_info")
 * @ORM\Entity
 */
class FoodInfo
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
     * @ORM\Column(name="fat", type="integer", nullable=false)
     */
    private $fat;

    /**
     * @var int
     *
     * @ORM\Column(name="energy", type="integer", nullable=false)
     */
    private $energy;

    /**
     * @var int
     *
     * @ORM\Column(name="glucid", type="integer", nullable=false)
     */
    private $glucid;

    /**
     * @var int
     *
     * @ORM\Column(name="protein", type="integer", nullable=false)
     */
    private $protein;

    /**
     * @var int
     *
     * @ORM\Column(name="sugar", type="integer", nullable=false)
     */
    private $sugar;

    /**
     * @var int
     *
     * @ORM\Column(name="salt", type="integer", nullable=false)
     */
    private $salt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFat(): ?int
    {
        return $this->fat;
    }

    public function setFat(int $fat): self
    {
        $this->fat = $fat;

        return $this;
    }

    public function getEnergy(): ?int
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): self
    {
        $this->energy = $energy;

        return $this;
    }

    public function getGlucid(): ?int
    {
        return $this->glucid;
    }

    public function setGlucid(int $glucid): self
    {
        $this->glucid = $glucid;

        return $this;
    }

    public function getProtein(): ?int
    {
        return $this->protein;
    }

    public function setProtein(int $protein): self
    {
        $this->protein = $protein;

        return $this;
    }

    public function getSugar(): ?int
    {
        return $this->sugar;
    }

    public function setSugar(int $sugar): self
    {
        $this->sugar = $sugar;

        return $this;
    }

    public function getSalt(): ?int
    {
        return $this->salt;
    }

    public function setSalt(int $salt): self
    {
        $this->salt = $salt;

        return $this;
    }


}
