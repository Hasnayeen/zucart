<?php

namespace App\Filament\Vendor\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class TotalSales extends BaseWidget
{
    protected int | string | array $columnSpan = '1';
    protected static ?int $sort = 1;

    protected function getColumns(): int
    {
        return 1;
    }

    protected function getCards(): array
    {
        return [
            Card::make('Total Sales', '108.1k')
                ->description('27% increase from last month')
                ->descriptionIcon('lucide-trending-up', 'before')
                ->chart([62, 105, 124, 52, 81, 108])
                ->color('success'),
        ];
    }
}
