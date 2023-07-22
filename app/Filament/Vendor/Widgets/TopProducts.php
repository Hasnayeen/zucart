<?php

namespace App\Filament\Vendor\Widgets;

use App\Models\Product;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class TopProducts extends BaseWidget
{
    protected int | string | array $columnSpan = '4';
    protected static ?int $sort = 7;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Product::query()
                    ->take(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price_in_cents')
                    ->label('Total Sales')
                    ->sortable()
                    ->formatStateUsing(fn ($record) => '$' . number_format($record->price_in_cents / 100, 2)),
            ])
            ->defaultSort('price_in_cents', 'desc')
            ->paginated(false);
    }
}
