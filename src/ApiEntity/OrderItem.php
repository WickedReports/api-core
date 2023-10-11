<?php

declare(strict_types=1);

namespace Wickedreports\ApiCore\ApiEntity;

final class OrderItem
{
    private string $sourceSystem;
    private string $orderId;
    private string $sourceId;
    private float $pricePerUnit;
    private int $quantity;

    private ?string $productId = null;

    public function __construct(
        string $sourceSystem,
        string $orderId,
        string $sourceId,
        int $quantity,
        float $pricePerUnit
    ) {
        $this->sourceSystem = $sourceSystem;
        $this->orderId = $orderId;
        $this->sourceId = $sourceId;
        $this->quantity = $quantity;
        $this->pricePerUnit = $pricePerUnit;
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

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $value): self
    {
        $this->orderId = $value;

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

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $value): self
    {
        $this->quantity = $value;

        return $this;
    }

    public function getPricePerUnit(): float
    {
        return $this->pricePerUnit;
    }

    public function setPricePerUnit(float $value): self
    {
        $this->pricePerUnit = $value;

        return $this;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $value): self
    {
        $this->productId = $value;

        return $this;
    }
}
