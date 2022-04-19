<?php

namespace App\Http\Controllers\tamu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pemesanan;
use App\Models\kamar;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class tamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tamu.home');
    }

    public function about()
    {
        return view('tamu.about');
    }

    public function reservation(Request $request) {
        $kamar = kamar::all();
        return view('tamu.reservation', compact('kamar'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $kamar = kamar::select('id', 'jumlah_kamar', 'nama_kamar')->where('id', $request->kamar_id)->first();


        $lamanya = $this->lamanya($request->tanggal_checkin, $request->tanggal_checkout);
        if($lamanya > 30) {
            return back()->with('jumMlm', 'Lama menginap maksimal 30 hari');
        }

        $request->validate([
            'tanggal_checkin' => 'required|after_or_equal:yesterday',
            'tanggal_checkout' => 'required|after:tanggal_checkin',
            'jumlah_kamar_dipesan' => "required|numeric|integer|max:{$kamar->jumlah_kamar}|min:1",
            'nama_pemesan' => 'required|unique:pemesanan|not_regex:/[0-9!@#$%^&*]/',
            'nama_tamu' => 'required|unique:pemesanan|not_regex:/[0-9!@#$%^&*]/',
            'email_pemesan' => 'email|required|unique:pemesanan',
            'no_hp' => 'required|unique:pemesanan|min:6|max:20',
        ],
        [
            'nama_tamu.not_regex'=>'Guest names cannot contain numbers or special characters',
            'nama_pemesan.not_regex'=>'The customer name cannot contain numbers or special characters',
            'tanggal_checkin.required' => 'Check IN date is required',
            'tanggal_checkout.required' => 'Check OUT date is required',
            'tanggal_checkin.after_or_equal' => 'The Check IN date must be today or later',
            'tanggal_checkout.after' => 'The Check OUT date must be a date after Check IN Date',
            'nama_pemesan.required' => 'Customer Name is required',
            'nama_pemesan.unique' => "The Customer's name has been registered",
            'nama_tamu.unique' => 'Guest name has been registered',
            'nama_tamu.required' => 'Guest name is required',
            'email_pemesan.unique' => 'E-mail has been registered',
            'email_pemesan.required' => 'E-mail is required',
            'no_hp.required' => 'Phone number is required',
            'no_hp.unique' => 'Phone number has been registered',
            'no_hp.min' => 'Phone number at least 6 numbers',
            'no_hp.max' => 'Phone number up to 15 numbers',
            'jumlah_kamar_dipesan.required' => 'Number of rooms booked is required',
            'jumlah_kamar_dipesan.numeric' => 'Number of rooms must be a number',
            'jumlah_kamar_dipesan.integer' => 'Number of rooms must be a number',
            'jumlah_kamar_dipesan.max' => "There are only {$kamar->jumlah_kamar} {$kamar->nama_kamar} rooms available",
            'jumlah_kamar_dipesan.min' => 'Minimum order 1 room',
        ]);
        
        $pemesanan = new pemesanan;
        $pemesanan->nama_pemesan = ($request->nama_pemesan);
        $pemesanan->nama_tamu = ($request->nama_tamu);
        $pemesanan->email_pemesan = ($request->email_pemesan);
        $pemesanan->tanggal_checkin = ($request->tanggal_checkin);
        $pemesanan->tanggal_checkout = ($request->tanggal_checkout);
        $pemesanan->tanggal_pesan = Carbon::now();
        $pemesanan->jumlah_kamar_dipesan = ($request->jumlah_kamar_dipesan);
        if($request->jumlah_kamar_dipesan) {
            $kamar->update([
                'jumlah_kamar' => $kamar->jumlah_kamar - $request->jumlah_kamar_dipesan
            ]);
        }
        $pemesanan->status_pemesanan = 'unpaid';
        $pemesanan->no_hp = ($request->no_hp);
        $pemesanan->kamar_id =($request->kamar_id);
        $pemesanan->save();


        if ($pemesanan) {
            return redirect()->route('invoice', [$pemesanan])->with(session()->flash('iziToast'));
        }
    }

    public function invoice(pemesanan $pemesanan, $id) {
        $kamar = kamar::all();
        $pemesanan = pemesanan::with('kamar')->find($id);
        return view('tamu.invoice', ['pemesanan' => $pemesanan]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
