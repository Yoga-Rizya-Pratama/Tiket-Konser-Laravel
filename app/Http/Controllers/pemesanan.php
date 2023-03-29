<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemesanan as pemesan;

class pemesanan extends Controller
{

    public function index()
    {
        return view('pemesanan');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'nomor_hp' => 'required',
            'email_pemesan' => 'required',
            'jumlah_tiket' => 'required',
        ]);

        $randomId = rand(10000, 99999);
        $konser_id = $request->nama_pemesan . strval($randomId);

        $data = new pemesan();
        $data->tiket_id = $konser_id;
        $data->nama_pemesan = $request->nama_pemesan;
        $data->nomor_telepon_pemesan = $request->nomor_hp;
        $data->alamat_email_pemesan = $request->email_pemesan;
        $data->jumlah_tiket = $request->jumlah_tiket;
        $data->total_harga = $request->jumlah_tiket * 100000;
        $data->is_check_in = false;

        $saveData = $data->save();

        $dataTiket = pemesan::where('tiket_id', $konser_id)->first();
        return view('tiket', ['data' => $dataTiket]);
    }

    public function edit($id)
    {
        $dataTiket = pemesan::findOrFail($id);
        return view('edit', ['data' => $dataTiket]);
    }

    public function editProcess(Request $request, $id)
    {
        $request->validate([
            'nama_pemesan' => 'required',
            'nomor_hp' => 'required',
            'email_pemesan' => 'required',
            'jumlah_tiket' => 'required',
        ]);

        $randomId = rand(10000, 99999);
        $konser_id = $request->nama_pemesan . strval($randomId);

        $data = pemesan::find($id);

        $data->tiket_id = $konser_id;
        $data->nama_pemesan = $request->nama_pemesan;
        $data->nomor_telepon_pemesan = $request->nomor_hp;
        $data->alamat_email_pemesan = $request->email_pemesan;
        $data->jumlah_tiket = $request->jumlah_tiket;
        $data->total_harga = $request->jumlah_tiket * 100000;
        $data->is_check_in = false;

        $data->save();

        return redirect(route('admin'))->with('success', 'Data berhasil di edit.');
    }

    public function checkIn(Request $request)
    {
        $request->validate([
            'check_in' => 'required',
        ]);

        $data = pemesan::where('tiket_id', $request->check_in)->first();
        $data->is_check_in = true;

        $data->save();

        return back();
    }

    public function delete($id)
    {
        pemesan::destroy($id);
        return redirect(route('admin'));
    }
}
