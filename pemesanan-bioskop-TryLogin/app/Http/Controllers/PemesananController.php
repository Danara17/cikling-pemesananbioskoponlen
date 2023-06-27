<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\JadwalTayang;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function pesan(Request $request)
    {

        $kuotaDB = JadwalTayang::where('tanggal_tayang', $request->tanggal)->get('kuota');
        $kuota = $kuotaDB[0]->kuota;
        $updateKuota = $kuota - $request->pesan;
        if ($kuota == 0) {
            return redirect()->back()->with('warning', 'Mohon Maaf Kursi Penuh, Silahkan pilih film atau tanggal yang lain');
        }
        if($updateKuota < 0){
            return redirect()->back()->with('warning', 'pesanan melebihi kuota');
        }

        $newPesanan = new Pemesanan();
        $newPesanan->jadwal_tayang_id = $request->jadwal_id;
        $newPesanan->pelanggan_id = auth()->user()->id;
        $newPesanan->nama_pemesan = auth()->user()->username;
        $newPesanan->jumlah_tiket = $request->pesan;
        $newPesanan->total_harga = ($request->harga * $request->pesan);

        $newPesanan->save();


        JadwalTayang::where('tanggal_tayang', $request->tanggal)->update([
            'kuota' => $updateKuota,
        ]);


        return redirect('/')->with('success', 'Pesanan Anda berhasil silahkan cek ticket anda');

    }
}