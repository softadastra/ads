<?php
declare(strict_types=1);

namespace Modules\Tracking\Core\Database\Seeders;

final class TrackingSeeder
{
    public function run(): void
    {
        echo "[seed] Tracking ok\n";
    }
}

return new TrackingSeeder();