<?php

namespace App\Filament\Vendor\Pages;

use Filament\Pages\Dashboard as BasePage;

class Dashboard extends BasePage
{
    protected static ?string $navigationIcon = 'lucide-home';

    /**
     * @return int | string | array<string, int | string | null>
     */
    public function getColumns(): int | string | array
    {
        return 4;
    }

}
