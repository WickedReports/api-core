<?php

declare(strict_types=1);

namespace Wickedreports\ApiCore\ApiEntity;

use Wickedreports\ApiCore\Collections\ApiEntityCollections\OrderItemCollection;
use Wickedreports\ApiCore\Collections\ApiEntityCollections\OrderPaymentCollection;

final class Order
{
    private string $sourceSystem;
    private string $sourceId;
    private \DateTime $createDate;
    private float $orderTotal;

    private ?string $contactId = null;
    private ?string $contactEmail = null;
    private ?string $orderCurrency = null;
    private ?string $city = null;
    private ?string $state = null;
    private ?string $country = null;
    private ?string $subscriptionId = null;
    private ?string $ipAddress = null;
    private ?OrderItemCollection $items = null;
    private ?OrderPaymentCollection $payments = null;

    public function __construct(
        string $sourceSystem,
        string $sourceId,
        \DateTime $createDate,
        float $orderTotal
    ) {
        $this->sourceSystem = $sourceSystem;
        $this->sourceId = $sourceId;
        $this->createDate = $createDate;
        $this->orderTotal = $orderTotal;
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

    public function getCreateDate(): \DateTime
    {
        return $this->createDate;
    }

    public function setCreateDate(\DateTime $value): self
    {
        $this->createDate = $value;

        return $this;
    }

    public function getContactId(): ?string
    {
        return $this->contactId;
    }

    public function setContactId(?string $value): self
    {
        $this->contactId = $value;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $value): self
    {
        $this->contactEmail = $value;

        return $this;
    }

    public function getOrderTotal(): float
    {
        return $this->orderTotal;
    }

    public function setOrderTotal(float $value): self
    {
        $this->orderTotal = $value;

        return $this;
    }

    public function getOrderCurrency(): ?string
    {
        return $this->orderCurrency;
    }

    public function setOrderCurrency(?string $value): self
    {
        $this->orderCurrency = $value;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $value): self
    {
        $this->city = $value;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $value): self
    {
        $this->state = $value;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $value): self
    {
        $this->country = $value;

        return $this;
    }

    public function getSubscriptionId(): ?string
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(?string $value): self
    {
        $this->subscriptionId = $value;

        return $this;
    }

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $value): self
    {
        $this->ipAddress = $value;

        return $this;
    }

    public function getItems(): ?OrderItemCollection
    {
        return $this->items;
    }

    public function setItems(?OrderItemCollection $value): self
    {
        $this->items = $value;

        return $this;
    }

    public function getPayments(): ?OrderPaymentCollection
    {
        return $this->payments;
    }

    public function setPayments(?OrderPaymentCollection $value): self
    {
        $this->payments = $value;

        return $this;
    }
}
