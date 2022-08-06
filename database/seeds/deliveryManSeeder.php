<?php

use Illuminate\Database\Seeder;

class deliveryManSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {DB::table('deliveries')->insert([
        'name' => 'Himel',
        'email' => 'himel@gmail.com',
        'password' => Hash::make('himel123456'),
        'phone'=>'017*********'
    ]);
    }
}
