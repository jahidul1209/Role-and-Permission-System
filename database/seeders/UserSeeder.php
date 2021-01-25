<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
        $user =User::where('email','jahidulku120912@gmail.com')->first();
        if(is_null($user)){
        	$user = new User();
        	$user->name = 'Jahidul';
        	$user->email = 'jahidulku120912@gmail.com';
        	$user->password = Hash::make('12345');
        	$user->save();
        }
    }
}
