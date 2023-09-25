<?php

namespace Wickedreports\ApiCore\ApiEntity;


final class Order
{
    private string $sourceSystem;
    private string $sourceId;
    private \DateTime $createDate;
    private string $contactId;
    private string $contactEmail;

    private ?float $total = null;
    private ?string $currency = null;
    private ?string $city = null;
    private ?string $state = null;
    private ?string $country = null;
    private ?string $ipAddress = null;
    private ?string $subscriptionId = null;
    private ?array $items = null;
    private ?array $payments = null;

    public function __construct(
        string $sourceSystem,
        string $sourceId,
        \DateTime $createDate,
        string $contactId,
        string $contactEmail
    ) {
        $this->sourceSystem = $sourceSystem;
        $this->sourceId = $sourceId;
        $this->createDate = $createDate;
        $this->contactId = $contactId;
        $this->contactEmail = $contactEmail;
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

    public function getCreateDate(): ?\DateTime
    {
        return $this->createDate;
    }

    public function setCreateDate(?\DateTime $value): self
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

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $value): self
    {
        $this->total = $value;

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

    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    public function setIpAddress(?string $value): self
    {
        $this->ipAddress = $value;

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

    public function getItems(): ?array
    {
        return $this->items;
    }

    public function setItems(?array $value): self
    {
        $this->items = $value;

        return $this;
    }

    public function getPayments(): ?array
    {
        return $this->payments;
    }

    public function setPayments(?array $value): self
    {
        $this->payments = $value;

        return $this;
    }
}