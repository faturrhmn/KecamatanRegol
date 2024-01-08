<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\KritikSaran;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function index()
    {
        $contact = Contact::first();

        return view('contact', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $contact = Contact::first();

        return view('contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $request->validate([ 
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'maps_embed' => 'required',
        ]);

        $input = $request->all();

        $contact->update($input);

        return redirect('/admin/contact')->with('message', 'Data berhasil di edit');
    }

    public function storeKritikSaran(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'nomor_telepon' => 'required|numeric',
            'kritiksaran' => 'required|string',
        ]);

        try {
            // Simpan data ke database
            $kritikSaran = new KritikSaran();
            $kritikSaran->name = $validatedData['name'];
            $kritikSaran->nomor_telepon = $validatedData['nomor_telepon'];
            $kritikSaran->kritiksaran = $validatedData['kritiksaran'];
            $kritikSaran->save();
            
            return redirect()->back()->with('success', 'Kritik dan saran Anda berhasil disimpan. Terima kasih!');
        } catch (\Exception $e) {
            // Cetak pesan error untuk debugging
            dd($e->getMessage());
            // atau
            // return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan kritik dan saran.');
        }
        
    }

}
