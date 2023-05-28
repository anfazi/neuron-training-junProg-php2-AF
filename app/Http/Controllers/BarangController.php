<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::all();
        return view('barang.barang',compact('data'));
    }

    public function tambah(Request $request)
    {
        $barang = new Barang;
        $barang->nama_barang = $request->input('nama');
        $barang->harga = $request->input('harga');
        $barang->ketersediaan = $request->input('ketersediaan');
        $barang->save();
        return redirect()->back()->with('status', 'Berhasil Menambah Barang');

    }

    public function readBarang($id)
    {
        $data = Barang::find($id);
        return view('barang.barang',compact('data'));
    }

    public function updateBarang(Request $request)
    {
        $id_barang = $request->input('id');
        $barang = Barang::find($id_barang);
        $barang->nama_barang = $request->input('nama');
        $barang->harga = $request->input('harga');
        $barang->ketersediaan = $request->input('ketersediaan');
        $barang->update();
        return redirect()->back()->with('status', 'Berhasil Mengubah Barang');
    }

    public function editBarang($id)
    {
        $barang = Barang::find($id);
        return response()->json([
            'status'=>200,
            'barang'=> $barang,
        ]);
    }
}
