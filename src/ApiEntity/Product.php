<?php

namespace Wickedreports\ApiCore\ApiEntity;

final class Product
{
    private string $sourceSystem;
    private string $sourceId;
    private string $name;
    private float $price;

    private ?\DateTime $createDate = null;

    public function __construct(
        string $sourceSystem,
        string $sourceId,
        string $name,
        float $price
    ) {
        $this->sourceSystem = $sourceSystem;
        $this->sourceId = $sourceId;
        $this->name = $name;
        $this->price = $price;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $value): self
    {
        $this->name = $value;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $value): self
    {
        $this->price = $value;

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
}
