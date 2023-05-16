<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         Schema::disableForeignKeyConstraints();
//         Role::truncate();
//         Schema::enableForeignKeyConstraints();

//         $data = [
//             'admin', 'client'
//         ];

//         foreach($data as $value)
//         {
//             Role::insert([
//                 'name' => $value
//             ]);
//         }
//     }
// }

DB::table('users')->insert([
    [
        'name' => 'pb',
        'email' => 'pb@gmail.com',
        'password' => Hash::make('181005'),
        'no_hp' => '085771089173',
        'addres' => 'bogor',
        'role_id' => 1,
    ],
    [
        'name' => 'pibi',
        'email' => 'pibi@gmail.com',
        'password' => Hash::make('1815'),
        'no_hp' => '085771073',
        'addres' => 'cipayung',
        'role_id' => 2,  
    ]
    ]);
}
}