<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class pemesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemesanan')->insert([
            'nama_pemesan' => 'Dafi Nurrohman Maulana',
            'nama_tamu' => 'Ikhsan Maulana',
            'no_hp' => '099988987',
            'email_pemesan' => 'dafinmaulana@gmail.com',
            'tanggal_pesan' => Carbon::now()->format('Y-m-d H:i:s'),
            'tanggal_checkin' => '2022-3-12',
            'tanggal_checkout' => '2022-3-14',
            'jumlah_kamar_dipesan' => '1',
            'kamar_id' => '1',
        ]);
        DB::table('pemesanan')->insert([
            'nama_pemesan' => 'Jajang sudrajat maulana',
            'nama_tamu' => 'Iqbal Maulana',
            'no_hp' => '099988897',
            'email_pemesan' => 'ikbay@gmail.com',
            'tanggal_pesan' => Carbon::now()->format('Y-m-d H:i:s'),
            'tanggal_checkin' => '2022-3-13',
            'tanggal_checkout' => '2022-3-15',
            'jumlah_kamar_dipesan' => '2',
            'kamar_id' => '2',
        ]);
        DB::table('pemesanan')->insert([
            'nama_pemesan' => 'Heri khairul rahman',
            'nama_tamu' => 'Muhammad ikhsan Maulana',
            'no_hp' => '099988123',
            'email_pemesan' => 'ikhsan@gmail.com',
            'tanggal_pesan' => Carbon::now()->format('Y-m-d H:i:s'),
            'tanggal_checkin' => '2022-3-16',
            'tanggal_checkout' => '2022-3-18',
            'jumlah_kamar_dipesan' => '3',
            'kamar_id' => '3',
        ]);
    }
}
