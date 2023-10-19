<?php

declare(strict_types=1);

namespace Wickedreports\ApiCore\ApiEntity;

final class OrderPayment extends NestedOrderPayment
{
    private string $sourceSystem;
    private string $orderId;

    public function __construct(
        string $sourceSystem,
        string $orderId,
        float $amount,
        \DateTime $paymentDate
    ) {
        $this->sourceSystem = $sourceSystem;
        $this->orderId = $orderId;

        parent::__construct($amount, $paymentDate);
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
}
