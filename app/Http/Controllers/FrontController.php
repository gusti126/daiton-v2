<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Komentar;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $artikel1 = Artikel::orderBy('id', 'desc')->first();
        $artikel2 = Artikel::orderBy('id', 'desc')->limit(4)->get();
        $byKategori = Kategori::where('nama', 'Corporate Coaching')->with('artikel', function ($query) {
            $query->limit(3)->get();
        })->first();
        // dd($byKategori);
        return view('pages.front.home', [
            'satu' => $artikel1,
            'dua' => $artikel2,
            'byKategori' => $byKategori
        ]);
    }

    public function detailArtikel($slug)
    {
        $artikel = Artikel::with(['image' => function ($query) {
            $query->limit(2)->get();
        }])->with('komentar.reply')->where('slug', $slug)->first();

        // dd($artikel);/

        $byKategori = Kategori::where('nama', 'Corporate Coaching')->with('artikel', function ($query) {
            $query->limit(5)->get();
        })->first();

        // dd($artikel);

        return view('pages.front.detail-artikel', [
            'item' => $artikel,
            'byKategori' => $byKategori
        ]);
    }

    public function createKomen(Request $request, $id)
    {
        $data = $request->all();
        $data['artikel_id'] = $id;
        // dd($data);

        Komentar::create($data);

        return redirect()->back();
    }
}
