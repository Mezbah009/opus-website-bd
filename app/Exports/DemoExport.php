<?php

namespace App\Exports;

use App\Models\Demo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class DemoExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Demo::with('product')->latest()->get();
    }

    public function map($demo): array
    {
        return [
            $demo->first_name,
            $demo->last_name,
            $demo->email,
            $demo->mobile,
            $demo->org_name,
            $demo->product->title ?? 'N/A',
            $demo->created_at->format('Y-m-d'),
        ];
    }

    public function headings(): array
    {
        return [
            'First Name',
            'Last Name',
            'Email',
            'Mobile',
            'Organization',
            'Product',
            'Submitted At',
        ];
    }
}
