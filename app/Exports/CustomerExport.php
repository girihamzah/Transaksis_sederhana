<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CustomerExport Implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function query()
    {
        return Customer::orderBy('created_at', 'DESC');
    }
    public function headings(): array
    {
        return [
            'Id',
            'Name',
            'Email',
            'Address',
            'Created At',
            'Update At',
        ];
    }
    public function map($data): array
    {
        return [
            data_get($data, 'id'),
            data_get($data, 'name'),
            data_get($data, 'email'),
            data_get($data, 'address'),
            data_get($data, 'created_at'),
            data_get($data, 'updated_at'),
        ];
    }
}