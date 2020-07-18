<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(HotelSeeder::class);
         $this->call(RoomTypeSeeder::class);
         $this->call(RoomSeeder::class);
         $this->call(PriceSeeder::class);
         $this->call(BookingSeeder::class);
         $this->call(UserSeeder::class);
    }
}
