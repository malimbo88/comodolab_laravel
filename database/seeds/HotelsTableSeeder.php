<?php

use Illuminate\Database\Seeder;

// use Hotel class model
use App\Hotel;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed hotel Rivaverde
        $new_hotel = new Hotel();
        $new_hotel->name = "Rivaverde";
        $new_hotel->location = "Rimini";
        $new_hotel->image = "rivaverde.jpg";
        $new_hotel->save();

        // Seed hotel Settimana Bianca
        $new_hotel = new Hotel();
        $new_hotel->name = "Settimana Bianca";
        $new_hotel->location = "Cortina";
        $new_hotel->image = "settimanabianca.jpg";
        $new_hotel->save();

        // Seed hotel Business
        $new_hotel = new Hotel();
        $new_hotel->name = "Business";
        $new_hotel->location = "Milano";
        $new_hotel->image = "business.jpeg";
        $new_hotel->save();

        // Seed hotel Pizza Margherita
        $new_hotel = new Hotel();
        $new_hotel->name = "Pizza Margherita";
        $new_hotel->location = "Napoli";
        $new_hotel->image = "pizzamargherita.jpg";
        $new_hotel->save();

        // Seed hotel Mare Bello
        $new_hotel = new Hotel();
        $new_hotel->name = "Mare Bello";
        $new_hotel->location = "Cagliari";
        $new_hotel->image = "marebello.jpg";
        $new_hotel->save();
    }
}
