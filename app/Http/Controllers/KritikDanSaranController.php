<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KritikSaran;

class KritikDanSaranController extends Controller
{
    /**
     * Menyimpan kritik dan saran ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function index()
    {
        // Mengambil semua data Kritik dan Saran dari database
        $kritikSarans = KritikSaran::all();

        // Mengembalikan view dengan data yang telah diambil
        return view('kritikdansasran', ['kritikSarans' => $kritikSarans]);
    }
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_telepon' => 'required|numeric',
            'kritiksaran' => 'required|string',
            'captcha' => 'required|captcha',
        ]);

        // Buat instance model KritikSaran dan simpan data ke database
        $kritikSaran = new KritikSaran();
        $kritikSaran->nama = $validatedData['nama'];
        $kritikSaran->nomor_telepon = $validatedData['nomor_telepon'];
        $kritikSaran->kritiksaran = $validatedData['kritiksaran'];
        // Anda mungkin perlu menambahkan logika untuk menyimpan data captcha jika Anda ingin melakukannya
        $kritikSaran->save();

        // Redirect dengan pesan berhasil
        return redirect('/contact')->with('success', 'Kritik dan saran Anda berhasil disimpan. Terima kasih!');

    }
}
