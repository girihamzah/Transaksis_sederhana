<?php

namespace App\Exports;

use App\Models\Brand;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BrandExport Implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function query()
    {
        return Brand::orderBy('created_at', 'DESC');
    }
    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'Created At',
            'Update At',
        ];
    }
    public function map($data): array
    {
        return [
            data_get($data, 'id'),
            data_get($data, 'name'),
            data_get($data, 'created_at'),
            data_get($data, 'updated_at'),
        ];
    }
}