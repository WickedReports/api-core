<?php

declare(strict_types=1);

namespace Wickedreports\ApiCore\ApiEntity;

final class OrderPayment
{
    private string $sourceSystem;
    private string $orderId;
    private float $amount;
    private \DateTime $paymentDate;

    private ?string $status = null;
    private ?string $currency = null;

    public function __construct(
        string $sourceSystem,
        string $orderId,
        float $amount,
        \DateTime $paymentDate
    ) {
        $this->sourceSystem = $sourceSystem;
        $this->orderId = $orderId;
        $this->amount = $amount;
        $this->paymentDate = $paymentDate;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $value): self
    {
        $this->status = $value;

        return $this;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount(float $value): self
    {
        $this->amount = $value;

        return $this;
    }


    public function getPaymentDate(): \DateTime
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(\DateTime $value): self
    {
        $this->paymentDate = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $value): self
    {
        $this->currency = $value;

        return $this;
    }
}
