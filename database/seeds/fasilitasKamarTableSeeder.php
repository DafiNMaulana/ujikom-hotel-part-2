<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\fasilitasKamar;

class fasilitasKamarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas_kamar')->insert([
            'kamar_id' => '1',
            'nama_kasur' => 'king bed',
            'ukuran_ruangan' => '30ft',
            'kapasitas_ruangan' => 'max person 4',
            'nama_fasilitas_kamar' => 'Tv, Wifi, Bathub, Vip restaurant, babby sitter.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('fasilitas_kamar')->insert([
            'kamar_id' => '2',
            'nama_kasur' => 'Trio standart bed',
            'ukuran_ruangan' => '30ft',
            'kapasitas_ruangan' => 'max person 3',
            'nama_fasilitas_kamar' => 'Tv, Wifi, Bathub, Vip restaurant, babby sitter.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('fasilitas_kamar')->insert([
            'kamar_id' => '3',
            'nama_kasur' => 'Couple bed',
            'ukuran_ruangan' => '30ft',
            'kapasitas_ruangan' => 'max person 2',
            'nama_fasilitas_kamar' => 'Tv, Wifi, Bathub, Vip restaurant, babby sitter.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('fasilitas_kamar')->insert([
            'kamar_id' => '4',
            'nama_kasur' => 'Solo king bed',
            'ukuran_ruangan' => '30ft',
            'kapasitas_ruangan' => 'max person 1',
            'nama_fasilitas_kamar' => 'Tv, Wifi, Bathub, Vip restaurant, babby sitter.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('fasilitas_kamar')->insert([
            'kamar_id' => '5',
            'nama_kasur' => 'Standart large bed',
            'ukuran_ruangan' => '50ft',
            'kapasitas_ruangan' => 'max person 5',
            'nama_fasilitas_kamar' => 'Tv, Wifi, Bathub, Vip restaurant, babby sitter.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('fasilitas_kamar')->insert([
            'kamar_id' => '6',
            'nama_kasur' => 'Premium large bed',
            'ukuran_ruangan' => '50ft',
            'kapasitas_ruangan' => 'max person 6',
            'nama_fasilitas_kamar' => 'Tv, Wifi, Bathub, Vip restaurant, babby sitter.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
