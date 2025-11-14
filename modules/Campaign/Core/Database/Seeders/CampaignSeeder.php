<?php
declare(strict_types=1);

namespace Modules\Campaign\Core\Database\Seeders;

final class CampaignSeeder
{
    public function run(): void
    {
        echo "[seed] Campaign ok\n";
    }
}

return new CampaignSeeder();