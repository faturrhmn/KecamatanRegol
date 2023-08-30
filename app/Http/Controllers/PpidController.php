<?php

namespace App\Http\Controllers;

use App\Models\Ppid;
use Illuminate\Http\Request;

class PpidController extends Controller
{
    /**
     * Display a listingof the resource.
     */
    public function index()
    {
        $ppids = Ppid::all();

        return view('ppid.index', compact('ppids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ppid.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate input data
    $request->validate([
        'title' => 'required',
        'file' => 'required|file',
    ]);

    // Get all input data
    $input = $request->all();

    // Handle file upload
    if ($file = $request->file('file')) {
        $destinationPath = "ppidfile/";
        $fileName = $file->getClientOriginalName(); // Use getgetClientOriginalName() instead of getppidOriginalName()
        $file->move($destinationPath, $fileName);
        $input['file'] = $fileName;
    }

    // Create a new PPID entry in the database
    Ppid::create($input);

    return redirect('/admin/ppids')->with('message', 'Data berhasil ditambahkan');
}


    /**
     * Display the specified resource.
     */
    public function show(Ppid $ppid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ppid $ppid)
    {
        return view('ppid.edit', compact('ppid'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ppid $ppid)
    {
        $request->validate([
            'title' => 'required','file' => 'file',
        ]);

        $input = $request->all();

        if ($file = $request->file('file')) {
            $destinationPath = "file/";
            $fileName = $file->getppidOriginalName();
            $file->move($destinationPath, $fileName);
            $input['file'] = $fileName;
        }else{
            unset($input['file']);
        }

        $ppid->update($input);


        return redirect('/admin/ppids')->with('message', 'Data berhasil di edit');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ppid $ppid)
    {
        $ppid->delete();
        
        return redirect('/admin/ppids')->with('message', 'Data berhasil di hapus');

    }
}
