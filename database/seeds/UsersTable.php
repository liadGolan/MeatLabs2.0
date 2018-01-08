<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "first name" => "Liad",
            "last name"  => "Golan",
            "name"       => "Mr.Guy",
            "email"      => "liad17golan@gmail.com",
            "password"   => bcrypt("liad1234"),
            "bio"        => "This is a default bio",
        ]);
    }
}
