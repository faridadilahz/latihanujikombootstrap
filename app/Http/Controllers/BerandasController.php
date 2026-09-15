<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beritas;
use App\Models\Galeris;

class BerandasController extends Controller
{
    public function showBeranda()
    {
        $beritas = Beritas::latest()->take(3)->get();
        $galeris = Galeris::latest()->take(3)->get();

        return view('guest.beranda', compact('beritas', 'galeris'));
    }

    public function berita()
    {
        $beritas = Beritas::latest()->get();
        return view('guest.berita', compact('beritas'));
    }

    public function galeri()
    {
        $galeris = Galeris::latest()->get();
        return view('guest.galeri', compact('galeris'));
    }

    public function showBerita($id)
    {
        $beritas = Beritas::findOrFail($id);
        return view('guest.detailberita', compact('beritas'));
    }

    public function showGaleri($id)
    {
        $galeris  = Galeris::findOrFail($id);
        return view('guest.detailgaleri', compact('galeris'));
    }
}
