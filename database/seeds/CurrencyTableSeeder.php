<?php

use App\Currency;
use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currency = new Currency();
        $currency->name = "bKash Personal BDT";
        $currency->rate = 80;
        $currency->fee = 0;
        $currency->limit = 20;
        $currency->save();



        $currency = new Currency();
        $currency->name = "Rocket Personal BDT";
        $currency->rate = 80;
        $currency->fee = 0;
        $currency->limit = 20;
        $currency->save();

        $currency = new Currency();
        $currency->name = "DBBL Bank BDT";
        $currency->rate = 80;
        $currency->fee = 0;
        $currency->limit = 20;
        $currency->save();



        $currency = new Currency();
        $currency->name = "Neteller USD";
        $currency->rate = 80;
        $currency->fee = 0;
        $currency->limit = 20;
        $currency->save();


        $currency = new Currency();
        $currency->name = "Paypal USD";
        $currency->rate = 80;
        $currency->fee = 0;
        $currency->limit = 20;
        $currency->save();


        $currency = new Currency();
        $currency->name = "Skrill. USD";
        $currency->rate = 80;
        $currency->fee = 0;
        $currency->limit = 20;
        $currency->save();


        $currency = new Currency();
        $currency->name = "Perfect Money. USD";
        $currency->rate = 80;
        $currency->fee = 0;
        $currency->limit = 20;
        $currency->save();


        $currency = new Currency();
        $currency->name = "Payoneer USD";
        $currency->rate = 80;
        $currency->fee = 0;
        $currency->limit = 20;
        $currency->save();



    }
}
