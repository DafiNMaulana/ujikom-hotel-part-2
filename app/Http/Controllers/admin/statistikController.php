<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\pemesanan;
use App\Models\kamar;
use Illuminate\Support\Facades\DB;

class statistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = admin::where('level', '=', 'admin')->count();
        $resepsionis = admin::where('level', '=', 'resepsionis')->count();
        $unpaid = pemesanan::where('status_pemesanan', '=', 'unpaid')->count();
        $checkin = pemesanan::where('status_pemesanan', '=', 'checkin')->count();
        $checkout = pemesanan::where('status_pemesanan', '=', 'checkout')->count();
        $kamar = kamar::count();
        return view('admin.statistik', [
            'kamar'=>$kamar,
            'admin'=>$admin,
            'resepsionis'=>$resepsionis,
            'unpaid'=>$unpaid,
            'checkin'=>$checkin,
            'checkout'=>$checkout,
            'data_chart'=>$this->data_chart()
        ]);
    }

    public function data_chart() {
        $pemesanan = pemesanan::select(
            'created_at',
            DB::raw('count(*) as jumlah_kamar_dipesan')
        )
        ->whereMonth('created_at', '03')
        ->orderBy('created_at')
        ->groupBy('created_at')
        ->get();

        $data = [];

        foreach($pemesanan as $pesanan){
            $data['label'][] = date('d/m/Y', strtotime($pesanan->created_at));
            $data['data'][] = $pesanan->jumlah_kamar_dipesan;
        }

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
