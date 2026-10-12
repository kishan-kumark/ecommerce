<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create admin seeders
        // admin user baar baar na create ho isliye check karenge ki admin user already exist karta hai ya nahi
        $user = User::where('email', 'admin@example.com')->first();

        if(!$user){
            $user= new User();
        }

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = Hash::make('admin@123');
        $user->role = 1;

        $user->save();
    }
}
