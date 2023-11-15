<?php

namespace Wickedreports\ApiCore\ApiEntity;

class Contact
{
    private string $sourceSystem;
    private string $sourceId;
    private \DateTime $createDate;
    private string $email;

    private ?string $firstName = null;
    private ?string $lastName = null;
    private ?string $city = null;
    private ?string $state = null;
    private ?string $country = null;
    private ?string $ipAddress = null;
    private ?string $phone = null;

    public function __construct(
        string $sourceSystem,
        string $sourceId,
        \DateTime $createDate,
        string $email
    ) {
        $this->sourceSystem = $sourceSystem;
        $this->sourceId = $sourceId;
        $this->createDate = $createDate;
        $this->email = $email;
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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $value): self
    {
        $this->email = $value;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $value): self
    {
        $this->firstName = $value;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $value): self
    {
        $this->lastName = $value;

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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $value): self
    {
        $this->phone = $value;

        return $this;
    }
}
