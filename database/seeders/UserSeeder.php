<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => "MG MG",
            'email' => "mgmg@gmail.com",
            'password' => Hash::make("mgmg"),
        ]);
        Admin::create([
            'name' => "admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make("admin"),
        ]);
    }
}