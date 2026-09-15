<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use Illuminate\Http\Request;

class BeritasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Beritas::latest()->get();
        return view('admin.kelolaberita', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.postingberita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judulberita' => 'required',
            'deskripsiberita' => 'required',
            'gambarberita' => 'required|image|mimes:png,jpg|max:5012',
        ]);

        $imagePath = $request->file('gambarberita')->store('berita','public');

        Beritas::create([
            'judulberita' => $request->judulberita,
            'deskripsiberita' => $request->deskripsiberita,
            'gambarberita' => $imagePath,
        ]);

        return redirect()->route('berita')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Beritas $beritas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beritas $beritas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beritas $beritas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beritas $beritas)
    {
        //
    }
}
