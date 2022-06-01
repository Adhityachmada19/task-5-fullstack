<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=User::create([
            'name'=>'adhityaachmada',
            'email'=>'adhitya123@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
    }
}
