<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pembimbing as PembimbingModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Pembimbing extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $nip_pembimbing, $nama_pembimbing, $ket_pembimbing, $foto_pembimbing; 
    public $modal = false;

    public function render()
    {
        $pembimbing = PembimbingModel::latest()->simplePaginate(10);
        return view('livewire.pembimbing',[
            'pembimbing' => $pembimbing
        ]);
    }

    public function showModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->nip_pembimbing = "";
        $this->nama_pembimbing = "";
        $this->ket_pembimbing = "";
        $this->foto_pembimbing = null;
    }
}
