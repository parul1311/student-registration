<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Hash;

class UserImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $user = User::where('email',$row['email'])->first();
        if(!$user){
            $user = User::create([
                'name' => $row['name'],
                'email' => $row['email'],
                'phone' => $row['phone'],
                'dob' => $row['dob'],
                'address' => $row['address'],
                'password' => Hash::make('1234'),
                'verify_by_admin' => $row['verified'],
            ]);
            $user->attachRole('student');
            return $user;
        }
    }
}
