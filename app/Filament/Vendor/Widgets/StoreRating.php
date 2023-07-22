<?php

namespace App\Filament\Vendor\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StoreRating extends BaseWidget
{
    protected int | string | array $columnSpan = '1';
    protected static ?int $sort = 4;

    protected function getColumns(): int
    {
        return 1;
    }

    protected function getCards(): array
    {
        return [
            Card::make('Store Rating', '4.8')
                ->description('502 reviews')
                ->color('secondary'),
        ];
    }
}
