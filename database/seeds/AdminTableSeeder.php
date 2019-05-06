<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin();
        $admin->name ="admin";
        $admin->email ="admin@gmail.com";
        $admin->phone ="54505456";
        $admin->password = bcrypt('admin123');
        $admin->photo_id = 2;
        $admin->save();

    }
}
