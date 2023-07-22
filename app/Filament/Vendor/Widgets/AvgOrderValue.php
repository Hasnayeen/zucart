<?php

namespace App\Filament\Vendor\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class AvgOrderValue extends BaseWidget
{
    protected int | string | array $columnSpan = '1';
    protected static ?int $sort = 3;

    protected function getColumns(): int
    {
        return 1;
    }

    protected function getCards(): array
    {
        return [
            Card::make('Avg. Order Value', '$58.1')
                ->description('22% decrease from last month')
                ->descriptionIcon('lucide-trending-down', 'before')
                ->chart([62, 85, 74, 62, 71, 58])
                ->color('danger'),
        ];
    }
}
