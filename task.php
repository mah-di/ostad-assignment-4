<?php

class Product{
    private int $id;
    private string $name;
    private float $price;

    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;

        $this->name = $name;

        $this->price = $price;
    }

    public function getFormattedPrice(): string
    {
        return sprintf("%.2f", $this->price);
    }

    public function showDetails(): void
    {
        printf("Product Details:\n- ID: %d\n- Name: %s\n- Price: $%s", $this->id, $this->name, $this->getFormattedPrice());
    }
}

$product = new Product(1, "T-shirt", 19.99);

$product->showDetails();
