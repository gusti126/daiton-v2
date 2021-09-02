<?php

namespace App\Http\Livewire;

use App\Models\Artikel as ModelsArtikel;
use App\Models\Kategori;
use Livewire\Component;

class Artikel extends Component
{
    public $artikel, $limit = 3;
    public $keyword = '';

    public function mount()
    {
        $allARtikel = ModelsArtikel::limit($this->limit)->get();
        $this->artikel = $allARtikel;
    }

    public function render()
    {
        $kategori = Kategori::get();

        $datahead =
            ModelsArtikel::orderBy('id', 'desc')->limit(4)->first();

        if ($this->keyword) {
            $this->artikel = ModelsArtikel::where('title', 'like', "%" . $this->keyword . "%")->get();
        }
        if (strlen($this->keyword) < 3) {
            $allARtikel = ModelsArtikel::limit($this->limit)->get();
            $this->artikel = $allARtikel;
        }


        return view('livewire.artikel', [
            'datahead' => $datahead,
            'artikel' => $this->artikel,
            'kategoriAll' => $kategori,
        ])->extends('layouts.frontend')->section("content");
    }

    public function byKategori($id)
    {
        $kategori = ModelsArtikel::where('kategori_id', $id)->get();
        $this->artikel = $kategori;
    }

    public function loadMore()
    {
        $this->limit += 3;
    }
}
