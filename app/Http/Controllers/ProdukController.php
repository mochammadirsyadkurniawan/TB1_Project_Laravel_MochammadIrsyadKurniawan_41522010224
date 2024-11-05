<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    //
    public function viewProduk()
    {
        $produk = Produk::all();
        return view('produk', ['produk' => $produk]);
    }

    public function createProduk(Request $request)
    {
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk,
            'image' => $request->image
        ]);

        return redirect('/produk');
    }

    public function viewAddProduk()
    {
        return view('addproduk');
    }

    public function deleteProduk($kode_produk)
    {
        Produk::where('kode_produk', $kode_produk)->delete();

        return redirect('/produk');
    }

    public function viewEditProduk($kode_produk)
    {
        $ubahProduk = Produk::where('kode_produk', $kode_produk)->first();
        return view('editproduk', compact('ubahProduk'));
    }

    public function updateProduk($kode_produk, Request $request)
    {
        Produk::where('kode_produk', $kode_produk)->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk,
            'image' => $request->image
        ]);
        return redirect('/produk');
    }
}
