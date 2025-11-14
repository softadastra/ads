<?php
declare(strict_types=1);

namespace Modules\Billing\Core\Services;

final class BillingService
{
    public function info(): string
    {
        return 'Module Billing loaded successfully.';
    }
}