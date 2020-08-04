<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Administrator";
        $user->email = "administrator@gmail.com";
        $user->slug = Str::slug('Administrator', '-');
        $user->password = Hash::make('*#rahasia123#');
        $user->save();

    }
}
