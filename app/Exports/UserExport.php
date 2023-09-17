<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return User::whereRoleIs(['student'])->select('id','name','email','phone','dob','address','verify_by_admin','created_at','updated_at')->get();
    }
    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'Phone',
            'dob',
            'Address',
            'Verified',
            'created_at',
            'updated_at',
            // Add more headings as needed
        ];
    }
}