<?php

declare(strict_types=1);

namespace Wickedreports\ApiCore\ApiEntity;

class Product
{
    private string $sourceSystem;
    private string $sourceId;
    private string $productName;
    private float $productPrice;

    public function __construct(
        string $sourceSystem,
        string $sourceId,
        string $productName,
        float $productPrice
    ) {
        $this->sourceSystem = $sourceSystem;
        $this->sourceId = $sourceId;
        $this->productName = $productName;
        $this->productPrice = $productPrice;
    }

    public function getSourceSystem(): string
    {
        return $this->sourceSystem;
    }

    public function setSourceSystem(string $value): self
    {
        $this->sourceSystem = $value;

        return $this;
    }

    public function getSourceId(): string
    {
        return $this->sourceId;
    }

    public function setSourceId(string $value): self
    {
        $this->sourceId = $value;

        return $this;
    }

    public function getProductName(): string
    {
        return $this->productName;
    }

    public function setProductName(string $value): self
    {
        $this->productName = $value;

        return $this;
    }

    public function getProductPrice(): float
    {
        return $this->productPrice;
    }

    public function setProductPrice(float $value): self
    {
        $this->productPrice = $value;

        return $this;
    }
}
