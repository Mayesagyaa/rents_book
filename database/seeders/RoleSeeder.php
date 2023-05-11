<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\Hash;
use Illuminate\Support\facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     Schema::disableForeignKeyConstraints();
    //     Role::truncate();
    //     Schema::enableForeignKeyConstraints();

    //     $data = 
    //     [ 
    //         'admin', 'client'
    //     ];
    // foreach($data as $value)
    // {
    //     Role::insert([
    //         'name'=> $value
    //     ]);
        
    // }
    // }

    DB::table('users')->insert([
        [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('mayeye29'),
            'no_hp' => '08558966948',
            'address' => 'cibedug',
            'role_id' => 1
        ],
        [
            'name' => 'mayesa',
            'email' => 'mayesa@gmail.com',
            'password' => Hash::make('maye123'),
            'no_hp' => '08558966948',
            'address' => 'bogor',
            'role_id' => 2
        ]
    ]);
}
}
