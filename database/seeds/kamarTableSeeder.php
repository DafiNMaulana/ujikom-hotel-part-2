<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class kamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('kamar')->insert([
            'nama_kamar' => 'Deluxe King',
            'jumlah_kamar' => '145',
            'harga_kamar' => '150000',
            'foto_kamar' => ('/kamar_seeder/room-1.jpg'),
            'keterangan' => 'Hotel bagus ko hehe',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('kamar')->insert([
            'nama_kamar' => 'Standart room',
            'jumlah_kamar' => '145',
            'harga_kamar' => '155000',
            'foto_kamar' => ('/kamar_seeder/room-2.jpg'),
            'keterangan' => 'Hotel bagus koh 2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('kamar')->insert([
            'nama_kamar' => 'Medium Capital',
            'jumlah_kamar' => '145',
            'harga_kamar' => '160000',
            'foto_kamar' => ('/kamar_seeder/room-3.jpg'),
            'keterangan' => 'Hotel bagus koh 3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('kamar')->insert([
            'nama_kamar' => 'Instant Travel',
            'jumlah_kamar' => '145',
            'harga_kamar' => '165000',
            'foto_kamar' => ('/kamar_seeder/room-4.jpg'),
            'keterangan' => 'Hotel bagus koh 4',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('kamar')->insert([
            'nama_kamar' => 'Venuexima',
            'jumlah_kamar' => '145',
            'harga_kamar' => '170000',
            'foto_kamar' => ('/kamar_seeder/room-5.jpg'),
            'keterangan' => 'Hotel bagus koh 5',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('kamar')->insert([
            'nama_kamar' => 'Ratidal Noor',
            'jumlah_kamar' => '145',
            'harga_kamar' => '175000',
            'foto_kamar' => ('/kamar_seeder/room-6.jpg'),
            'keterangan' => 'Hotel bagus koh 6',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
