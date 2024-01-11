<?php

declare(strict_types=1);

namespace Wickedreports\ApiCore\ApiEntity;

class OrderPaymentStatus
{
    public const APPROVED = 'APPROVED';
    public const FAILED = 'FAILED';
    public const PENDING = 'PENDING';
    public const REFUNDED = 'REFUNDED';
    public const PARTIALLY_REFUNDED = 'PARTIALLY REFUNDED';
}
