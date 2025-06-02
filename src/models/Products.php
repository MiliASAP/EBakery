<?php

class Products
{
    private ?int $id = null;
    private string $name;
    private string $image;
    private float $price;
    private string $description;
    private string $ingredients;
    private int $cals;
    private int $protein;
    private int $carbs;
    private int $fats;
    private int $fiber;
    private int $salt;
    private string $category;

    public function __construct(
        int $id,
        string $name,
        string $image,
        float $price,
        string $description,
        string $ingredients,
        int $cals,
        int $protein,
        int $carbs,
        int $fats,
        int $fiber,
        int $salt,
        string $category
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->description = $description;
        $this->ingredients = $ingredients;
        $this->cals = $cals;
        $this->protein = $protein;
        $this->carbs = $carbs;
        $this->fats = $fats;
        $this->fiber = $fiber;
        $this->salt = $salt;
        $this->category = $category;
    }

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

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIngredients(): string
    {
        return $this->ingredients;
    }

    public function getCals(): int
    {
        return $this->cals;
    }

    public function getProtein(): int
    {
        return $this->protein;
    }

    public function getCarbs(): int
    {
        return $this->carbs;
    }

    public function getFats(): int
    {
        return $this->fats;
    }

    public function getFiber(): int
    {
        return $this->fiber;
    }

    public function getSalt(): int
    {
        return $this->salt;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setIngredients(string $ingredients): void
    {
        $this->ingredients = $ingredients;
    }

    public function setCals(int $cals): void
    {
        $this->cals = $cals;
    }

    public function setProtein(int $protein): void
    {
        $this->protein = $protein;
    }

    public function setCarbs(int $carbs): void
    {
        $this->carbs = $carbs;
    }

    public function setFats(int $fats): void
    {
        $this->fats = $fats;
    }

    public function setFiber(int $fiber): void
    {
        $this->fiber = $fiber;
    }

    public function setSalt(int $salt): void
    {
        $this->salt = $salt;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }
}
