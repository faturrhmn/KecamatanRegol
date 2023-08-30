<?php

namespace App\Http\Controllers;

use App\Models\Ifografi;
use Illuminate\Http\Request;

class IfografiController extends Controller
{
    public function index()
{
    $ifografis = Ifografi::all();

    return view('ifografi.index', compact('ifografis'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ifografi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = "image/";
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Ifografi::create($input);

        return redirect('/admin/ifografis')->with('message', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Ifografi $ifografi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ifografi $ifografi)
    {
        return view('ifografi.edit', compact('ifografi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ifografi $ifografi)
    {
        $request->validate([
            'image' => 'image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = "image/";
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }else{
            unset($input['image']);
        }

        $ifografi->update($input);


        return redirect('/admin/ifografis')->with('message', 'Data berhasil di edit');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ifografi $ifografi)
    {
        $ifografi->delete();
        
        return redirect('/admin/ifografis')->with('message', 'Data berhasil di hapus');

    }
}
