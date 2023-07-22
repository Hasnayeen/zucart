<?php

namespace App\Filament\Vendor\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Support\Colors\Color;

class SalesByCategory extends ChartWidget
{
    protected static ?string $heading = 'Sales By Category';
    protected int | string | array $columnSpan = '4';
    protected static ?int $sort = 7;
    protected static ?string $maxHeight = '20rem';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Smartphone',
                    'data' => collect(range(1, 12))->map(fn () => rand(200, 300))->toArray(),
                    'backgroundColor' => [
                        sprintf('rgb(%s)', Color::Blue[300]),
                    ],
                ],
                [
                    'label' => 'SmartWatch',
                    'data' => collect(range(1, 12))->map(fn () => rand(200, 300))->toArray(),
                    'backgroundColor' => [
                        sprintf('rgb(%s)', Color::Purple[300]),
                    ],
                ],
                [
                    'label' => 'Laptop',
                    'data' => collect(range(1, 12))->map(fn () => rand(200, 300))->toArray(),
                    'backgroundColor' => [
                        sprintf('rgb(%s)', Color::Yellow[300]),
                    ],
                ],
                [
                    'label' => 'Speakers',
                    'data' => collect(range(1, 12))->map(fn () => rand(200, 300))->toArray(),
                    'backgroundColor' => [
                        sprintf('rgb(%s)', Color::Green[300]),
                    ],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dev'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
