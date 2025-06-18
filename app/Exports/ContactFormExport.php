<?php

namespace App\Exports;

use App\Models\ContactForm;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactFormExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return ContactForm::select('id', 'name', 'email','subject',  'message')->get();
    }

    public function headings(): array
    {
        return ['ID', 'Name', 'Email', 'Subject', 'Message'];
    }
}
    