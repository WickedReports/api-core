<?php

namespace Wickedreports\ApiCore\ApiEntity;

final class OrderItem
{
    private string $sourceSystem;
    private string $sourceId;
    private string $orderId;

    private ?string $productId = null;
    private ?int $quantity = null;
    private ?float $PPU = null;

    public function __construct(
        string $sourceSystem,
        string $sourceId,
        string $orderId
    ) {
        $this->sourceSystem = $sourceSystem;
        $this->sourceId = $sourceId;
        $this->orderId = $orderId;
    }

    public function getSourceSystem(): ?string
    {
        return $this->sourceSystem;
    }

    public function setSourceSystem(?string $value): self
    {
        $this->sourceSystem = $value;

        return $this;
    }

    public function getSourceId(): ?string
    {
        return $this->sourceId;
    }

    public function setSourceId(?string $value): self
    {
        $this->sourceId = $value;

        return $this;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $value): self
    {
        $this->orderId = $value;

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

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $value): self
    {
        $this->quantity = $value;

        return $this;
    }

    public function getPPU(): ?float
    {
        return $this->PPU;
    }

    public function setPPU(?float $value): self
    { 
        $this->PPU = $value;

        return $this;
    }
}