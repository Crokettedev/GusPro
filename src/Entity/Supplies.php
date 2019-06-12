<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SuppliesRepository")
 */
class Supplies
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
    private $title_supplies;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descrip_supplies;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $price_supplies;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stock_supplies;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label_supplies;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleSupplies(): ?string
    {
        return $this->title_supplies;
    }

    public function setTitleSupplies(string $title_supplies): self
    {
        $this->title_supplies = $title_supplies;

        return $this;
    }

    public function getDescripSupplies(): ?string
    {
        return $this->descrip_supplies;
    }

    public function setDescripSupplies(string $descrip_supplies): self
    {
        $this->descrip_supplies = $descrip_supplies;

        return $this;
    }

    public function getPriceSupplies(): ?string
    {
        return $this->price_supplies;
    }

    public function setPriceSupplies(string $price_supplies): self
    {
        $this->price_supplies = $price_supplies;

        return $this;
    }

    public function getStockSupplies(): ?string
    {
        return $this->stock_supplies;
    }

    public function setStockSupplies(string $stock_supplies): self
    {
        $this->stock_supplies = $stock_supplies;

        return $this;
    }

    public function getLabelSupplies(): ?string
    {
        return $this->label_supplies;
    }

    public function setLabelSupplies(string $label_supplies): self
    {
        $this->label_supplies = $label_supplies;

        return $this;
    }
}
