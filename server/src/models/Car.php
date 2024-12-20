<?php

namespace App\Models;

use Doctrine\ORM\Mapping as ORM;
use Jarvis\Framework\Common\Serializable;

/**
 * @ORM\Entity
 * @ORM\Table(name="cars")
 */
class Car implements Serializable
{
    /**
     * @ORM\Id()
     * @ORM\Column()
     * @ORM\GeneratedValue()
     */
    private int $id;

    /**
     * @ORM\Column()
     */
    private string $name;

    /**
     * @ORM\Column()
     */
    private string $image;

    /**
     * @ORM\Column()
     */
    private int $year;

    /**
     * @ORM\Column()
     */
    private float $price;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function setYear(int $year)
    {
        $this->year = $year;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }
    /**
     * Serialize object
     *
     * @return array
     */
    function serialize(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'year' => $this->year,
            'image' => $this->image,
            'price' => $this->price
        ];
    }
}
