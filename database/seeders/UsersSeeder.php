<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Administrator',
            'username' => 'selfadmin',
            'password' => Hash::make('selfadmin123')
        ]);
        $user->roles()->attach(Role::where('name','admin')->first());

    }
}
