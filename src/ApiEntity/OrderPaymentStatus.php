<?php

declare(strict_types=1);

namespace Wickedreports\ApiCore\ApiEntity;

class OrderPaymentStatus
{
    public const APPROVED = 'APPROVED';
    public const FAILED = 'FAILED';
    public const PENDING = 'PENDING';
    public const PROCESSING = 'PROCESSING';
    public const REFUNDED = 'REFUNDED';
    public const PARTIALLY_REFUNDED = 'PARTIALLY REFUNDED';
    public const VOIDED = 'VOIDED';
    public const TAX = 'TAX';
    public const DISCOUNT = 'DISCOUNT';
}
