<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use App\Models\Product;
use Filament\Widgets\ChartWidget;

class ProductStockChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $products = Product::all();

        return [
            'datasets' => [
                [
                    'label' => 'Product Stock',
                    'data' => $products->pluck('stock')->toArray(),
                ],
            ],
            'labels' => $products->pluck('name')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
