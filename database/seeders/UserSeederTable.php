<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "cherif";
        $user->email = "riftone070@gmail.com";
        $user->password = Hash::make('passer123');
        $user->role = "admin";
        $user->save();
    }
}
