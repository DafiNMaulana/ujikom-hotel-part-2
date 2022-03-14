<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\pemesanan;
use Faker\Generator as Faker;

$factory->define(pemesanan::class, function (Faker $faker) {
    $checkin = $this->faker->dateTimeBetween('-1 week', '+1 week');
    $checkout = date('Y-m-d', strtotime('+ '.rand(1, 3). 'days', strtotime($checkin->format('Y-m-d') ) ) );
    $create = date('Y-m-d', strtotime('+ '.rand(1, 3). 'days', strtotime($checkin->format('Y-m-d') ) ) );
    return [
        'kamar_id' => rand(1, 3),
        'tanggal_checkin'=>$checkin,
        'tanggal_checkout'=>$checkout,
        'jumlah_kamar_dipesan'=>rand(1, 3),
        'nama_pemesan'=>$this->faker->name(),
        'email_pemesan'=>$this->faker->freeEmail(),
        'no_hp'=>$this->faker->phoneNumber(),
        'nama_tamu'=>$this->faker->name(),
        'status_pemesanan'=>'unpaid',
        'tanggal_pesan'=>$create,
        'created_at'=>$create,
        'updated_at'=>$create,
    ];
});
