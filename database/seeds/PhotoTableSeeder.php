<?php

use App\Photo;
use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photo = new Photo();
        $photo->file = "user.jpg";
        $photo->save();


        $photo = new Photo();
        $photo->file = "admin.jpg";
        $photo->save();
    }
}
