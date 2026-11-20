<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        User::updateOrCreate(['email'=>'admin@RecycleHub.ac.id'],['name'=>'Admin','password'=>Hash::make('password'),'role'=>'admin']);

    }
}
