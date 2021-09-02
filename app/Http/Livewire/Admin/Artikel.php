<?php

namespace App\Http\Livewire\Admin;

use App\Models\Artikel as ModelsArtikel;
use Livewire\Component;

class Artikel extends Component
{
    public $limit = 5;
    public $confirmId;
    public function render()
    {
        $data = ModelsArtikel::limit($this->limit)->get();
        return view('livewire.admin.artikel', [
            'artikels' => $data
        ])->extends('layouts.admin')->section('content');
    }

    public function loadMore()
    {
        $this->limit += 3;
    }

    public function confirmDelete($id)
    {
        $this->confirmId = $id;
    }

    public function deleteNO()
    {
        $this->confirmId = 0;
    }

    public function delete()
    {

        $data =
            ModelsArtikel::where('id', $this->confirmId)->first();
        $data->delete();
        $this->alert('success', 'Berhasil hapus data', [
            'position' =>  'top',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }
}
