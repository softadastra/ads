<?php
declare(strict_types=1);

namespace Modules\Billing\Core\Database\Seeders;

final class BillingSeeder
{
    public function run(): void
    {
        echo "[seed] Billing ok\n";
    }
}

return new BillingSeeder();