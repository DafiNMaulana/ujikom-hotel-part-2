<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\fasilitas_hotel;

class fasilitasHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fasilitasHotel = DB::table('fasilitas_hotel')->paginate(5);
        return view('admin.manage-fasilitas-hotel', compact('fasilitasHotel'));
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

        $rules = [
            'nama_fasilitas_hotel'                  => 'unique:fasilitas_hotel|min:3',
            'deskripsi_fasilitas_hotel'                  => 'min:3',
            'foto_fasilitas_hotel'                    => 'image|mimes:jpg,png,jpeg'
        ];

        $messages = [
            'nama_fasilitas_hotel.unique'             => 'Nama sudah ditambahkan',
            'nama_fasilitas_hotel.min'             => 'Minimum isi 3 karakter',
            'deskripsi_fasilitas_hotel.min'           => 'Minimum isi 3 karakter',
            'foto_fasilitas_hotel.image'            => 'File harus berupa gambar',
            'foto_fasilitas_hotel.mimes'            => 'Foto harus ber ekstensi jpg, png atau jpeg',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('error', 'Ups! ada yang salah, silahkan cek inputan anda');
        }
        $name = $request->foto_fasilitas_hotel;
        $nameFile =time().rand(100, 999).".".$name->getClientOriginalExtension();

        $fasilitas = new fasilitas_hotel();
        $fasilitas->nama_fasilitas_hotel = $request->nama_fasilitas_hotel;
        $fasilitas->foto_fasilitas_hotel = $nameFile;
        $fasilitas->deskripsi_fasilitas_hotel = $request->deskripsi_fasilitas_hotel;

        $name->move(public_path().'/img/fasilitas_hotel', $nameFile);
        $fasilitas->save();
        return redirect('/admin/manage-fasilitas-hotel')->with('pesan', 'Nice try! data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fasilitas = fasilitas_hotel::find($id);
        return view('modal.detail-fasilitas-hotel', compact('fasilitas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fasilitas = fasilitas_hotel::find($id);
        return view('modal.edit-fasilitas-hotel', compact('fasilitas'));
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
        $rules = [
            'nama_fasilitas_hotel'                  => 'min:3',
            'deskripsi_fasilitas_hotel'                  => 'min:3',
            'foto_fasilitas_hotel'                    => 'image|mimes:jpg,png,jpeg'
        ];

        $messages = [
            'nama_fasilitas_hotel.min'             => 'Minimum isi 3 karakter',
            'deskripsi_fasilitas_hotel.min'           => 'Minimum isi 3 karakter',
            'foto_fasilitas_hotel.image'            => 'File harus berupa gambar',
            'foto_fasilitas_hotel.mimes'            => 'Foto harus ber ekstensi jpg, png atau jpeg',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('error', 'Ups! ada yang salah, silahkan cek inputan anda');
        }
        $ubah = fasilitas_hotel::findorfail($id);
        $namaAwal = $ubah->foto_fasilitas_hotel;
        $data = [
            'nama_fasilitas_hotel' => $request->nama_fasilitas_hotel,
            'foto_fasilitas_hotel' => $namaAwal,
            'deskripsi_fasilitas_hotel' => $request->deskripsi_fasilitas_hotel,
        ];
        if($request->foto_fasilitas) {
            $request->foto_fasilitas->move(public_path(). '/img/fasilitas_hotel', $namaAwal);
        }
        $ubah->update($data);
        return redirect('admin/manage-fasilitas-hotel')->with('pesan', 'Mantap data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(fasilitas_hotel $manage_fasilitas_hotel)
    {
        if($manage_fasilitas_hotel->foto_fasilitas_hotel) {
            $file = 'img/fasilitas_hotel/'.$manage_fasilitas_hotel->foto_fasilitas_hotel;
            if(file_exists($file)){
                unlink($file);
            }
        }
        $manage_fasilitas_hotel->delete();
        return back()->with('pesan', 'hore! data berhasil di hapus');
    }
}
