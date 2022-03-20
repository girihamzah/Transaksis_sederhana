<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductExport Implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function query()
    {
        return Product::orderBy('created_at', 'DESC');
    }
    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'Category Id',
            'Brand',
            'Unit',
            'Created At',
            'Update At',
        ];
    }
    public function map($data): array
    {
        return [
            data_get($data, 'id'),
            data_get($data, 'name'),
            data_get($data, 'category_id'),
            data_get($data, 'brand'),
            data_get($data, 'unit'),
            data_get($data, 'created_at'),
            data_get($data, 'updated_at'),
        ];
    }
}