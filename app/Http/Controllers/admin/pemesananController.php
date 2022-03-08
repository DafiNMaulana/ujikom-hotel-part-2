<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pemesanan;
use Illuminate\Support\Facades\DB;
use App\Models\kamar;

class pemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemesanan = DB::table('pemesanan')->paginate(5);
        return view('admin.manage-pemesanan', compact('pemesanan'));
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $pemesanan = pemesanan::where('nama_tamu', 'like', "%" . $keyword . "%")->paginate(5);
        return view('admin.manage-pemesanan', compact('pemesanan'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemesanan = pemesanan::with('kamar')->find($id);
        $kamar = kamar::all();
        return view('admin.modal.detail-pemesanan', compact('pemesanan', 'kamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemesanan = pemesanan::find($id);
        return view('modal.edit-pemesanan', compact('pemesanan'));
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
        pemesanan::where('id', $id)->update([
            'status_pemesanan' => $request->status,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pemesanan')->where('id', $id)->delete();
        return redirect()->back()->with('pesan', 'Sip data berhasil hapus');
    }
}
