<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  Affected By Fillable:
        Admin::create([
            'name' => 'Admin User',
            'email' => 'admin@user.com',
            'password' => Hash::make('password'),
            'phone' => '9812345678',
            'address' => 'Sadobata',
            'status' => 'active',
            'type' => 'admin'
        ]);

        /* 
         Not Affected By Fillable:
          $admin = new Admin;
        */
    }
}
