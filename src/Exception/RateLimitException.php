<?php

namespace Wickedreports\ApiCore\Exception;

class RateLimitException extends ApiCoreCommonException
{
    private ?string $rate = null;
    private ?float $timeout = null;

    public function getRate(): ?string
    {
        return $this->rate;
    }

    public function setRate(?string $value): self
    {
        $this->rate = $value;

        return $this;
    }

    public function getTimeout(): ?float
    {
        return $this->timeout;
    }

    public function setTimeout(?float $rate): self
    {
        $this->timeout = $rate;

        return $this;
    }
}
