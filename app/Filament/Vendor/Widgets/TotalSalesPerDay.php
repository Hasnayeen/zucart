<?php

namespace App\Filament\Vendor\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Support\Colors\Color;

class TotalSalesPerDay extends ChartWidget
{
    protected static ?string $heading = 'Sales Per Day';
    protected int | string | array $columnSpan = '2';
    protected static ?int $sort = 5;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Total sales amount',
                    'data' => collect(range(1, 30))->map(fn () => rand(100, 300))->toArray(),
                    'backgroundColor' => sprintf('rgb(%s)', Color::Purple[300]),
                ],
            ],
            'labels' => range(1, 30),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
