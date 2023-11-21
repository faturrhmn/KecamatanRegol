<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listingof the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::all();

        return view('portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = "image/";
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        if ($image2 = $request->file('image2')) {
            $destinationPath = "image/";
            $imageName2 = $image2->getClientOriginalName();
            $image2->move($destinationPath, $imageName2);
            $input['image2'] = $imageName2;
        }
    
        Portfolio::create($input);
    
        return redirect('/admin/portfolios')->with('message', 'Data berhasil ditambahkan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required','description' => 'required', 'image' => 'image',
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

        if ($image2 = $request->file('image2')) {
            $destinationPath = "image/";
            $imageName2 = $image2->getClientOriginalName();
            $image2->move($destinationPath, $imageName2);
            $input['image2'] = $imageName2;
        } else {
            unset($input['image2']);
        }

        $portfolio->update($input);


        return redirect('/admin/portfolios')->with('message', 'Data berhasil di edit');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        
        return redirect('/admin/portfolios')->with('message', 'Data berhasil di hapus');

    }
}
