<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $userData = [[
            'name' => 'Mas PM',
            'email' => 'projectmanager@gmail.com',
            'role' => 'project_manager',
            'password' => bcrypt('12345')
        ],[
            'name' => 'Mas SA',
            'email' => 'systemanalyst@gmail.com',
            'role' => 'system_analys',
            'password' => bcrypt('12345')
        ],[
            'name' => 'Mas ui/ux designer',
            'email' => 'uiux@gmail.com',
            'role' => 'uiux_designer',
            'password' => bcrypt('12345')
        ],[
            'name' => 'Bang QA',
            'email' => 'qa@gmail.com',
            'role' => 'qa',
            'password' => bcrypt('12345')
        ],[
            'name' => 'Bang Programmer',
            'email' => 'programmer@gmail.com',
            'role' => 'programmer',
            'password' => bcrypt('12345')
        ]];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
