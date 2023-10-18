<?php

declare(strict_types=1);

namespace Wickedreports\ApiCore\ApiEntity;

class NestedOrderPayment
{
    private float $amount;
    private \DateTime $paymentDate;

    private ?string $status = null;
    private ?string $currency = null;

    public function __construct(
        float $amount,
        \DateTime $paymentDate
    ) {
        $this->amount = $amount;
        $this->paymentDate = $paymentDate;
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
