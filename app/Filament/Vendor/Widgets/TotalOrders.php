<?php

namespace App\Filament\Vendor\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class TotalOrders extends BaseWidget
{
    protected int | string | array $columnSpan = '1';
    protected static ?int $sort = 2;

    protected function getColumns(): int
    {
        return 1;
    }

    protected function getCards(): array
    {
        return [
            Card::make('Total Orders', '192')
                ->description('36% increase from last month')
                ->descriptionIcon('lucide-trending-up', 'before')
                ->chart([162, 105, 104, 152, 116, 192])
                ->color('success'),
        ];
    }
}
