<?php

namespace Wickedreports\ApiCore\ApiEntity;

final class OrderPayment
{
    private string $sourceSystem;
    private string $orderId;
    private \DateTime $createDate;
    private float $amount;

    private ?string $currency = null;
    private ?string $status = null;

    public const STATUS_APPROVED = 'APPROVED';
    public const STATUS_FAILED = 'FAILED';
    public const STATUS_REFUNDED = 'REFUNDED';
    public const STATUS_CREDIT = 'CREDIT';
    public const STATUS_PENDING = 'PENDING';

    public function __construct(
        string $sourceSystem,
        string $orderId,
        \DateTime $createDate,
        float $amount
    ) {
        $this->sourceSystem = $sourceSystem;
        $this->orderId = $orderId;
        $this->createDate = $createDate;
        $this->amount = $amount;
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

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function setOrderId(?string $value): self
    {
        $this->orderId = $value;

        return $this;
    }

    public function getCreateDate(): ?\DateTime
    {
        return $this->createDate;
    }

    public function setCreateDate(?\DateTime $value): self
    {
        $this->createDate = $value;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $value): self
    {
        $this->amount = $value;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $value): self
    {
        $this->status = $value;

        return $this;
    }
}