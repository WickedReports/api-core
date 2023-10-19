<?php

declare(strict_types=1);

namespace Wickedreports\ApiCore\ApiEntity;

class NestedOrderItem
{
    private string $orderItemId;
    private float $pricePerUnit;
    private int $quantity;

    private ?string $productId = null;

    public function __construct(
        string $orderItemId,
        int $quantity,
        float $pricePerUnit
    ) {
        $this->orderItemId = $orderItemId;
        $this->quantity = $quantity;
        $this->pricePerUnit = $pricePerUnit;
    }

    public function getOrderItemId(): string
    {
        return $this->orderItemId;
    }

    public function setOrderItemId(string $value): self
    {
        $this->orderItemId = $value;

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
