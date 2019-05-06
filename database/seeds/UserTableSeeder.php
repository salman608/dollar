<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->first_name ="Salman";
        $user->last_name ="Rahman";
        $user->email = "salman@gmail.com";
        $user->phone = "01764401919";
        $user->password = bcrypt('salman123');
        $user->is_active = 1;
        $user->status = 1;
        $user->photo_id = 1;
        $user->save();

        
    }
}
