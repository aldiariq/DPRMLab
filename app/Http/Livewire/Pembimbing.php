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
    public $id_pembimbing = null, $nip_pembimbing, $nama_pembimbing, $ket_pembimbing, $foto_pembimbing, $old_foto_pembimbing;
    public $modal = false;
    public $modaldelete = false;

    public function render()
    {
        $pembimbing = PembimbingModel::oldest()->simplePaginate(10);
        return view('livewire.pembimbing', [
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
        $this->modaldelete = false;
        $this->resetInput();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function resetInput()
    {
        $this->id_pembimbing = null;
        $this->nip_pembimbing = "";
        $this->nama_pembimbing = "";
        $this->ket_pembimbing = "";
        $this->foto_pembimbing = null;
        $this->old_foto_pembimbing = null;
    }

    public function store()
    {
        $imageValidation = '';
        if ($this->old_foto_pembimbing == null) {
            $imageValidation = "required|image|mimes:jpg,jpeg,png|max:1024";
        }

        $this->validate([
            'nip_pembimbing' => 'required',
            'nama_pembimbing' => 'required',
            'ket_pembimbing' => 'required',
            'foto_pembimbing' => $imageValidation
        ]);

        if ($this->foto_pembimbing != $this->old_foto_pembimbing) {
            $fileName = $this->foto_pembimbing->store('public/pembimbing');
        } else {
            $fileName = $this->foto_pembimbing;
        }

        PembimbingModel::updateOrCreate(['id_pembimbing' => $this->id_pembimbing], [
            'nip_pembimbing' => $this->nip_pembimbing,
            'nama_pembimbing' => $this->nama_pembimbing,
            'ket_pembimbing' => $this->ket_pembimbing,
            'foto_pembimbing' => $fileName
        ]);

        $this->closeModal();
    }

    public function edit($id_pembimbing)
    {
        $pembimbing = PembimbingModel::find($id_pembimbing);
        $this->nip_pembimbing = $pembimbing->nip_pembimbing;
        $this->nama_pembimbing = $pembimbing->nama_pembimbing;
        $this->ket_pembimbing = $pembimbing->ket_pembimbing;
        $this->foto_pembimbing = $pembimbing->foto_pembimbing;
        $this->old_foto_pembimbing = $pembimbing->foto_pembimbing;
        $this->id_pembimbing = $id_pembimbing;
        $this->showModal();
    }

    public function showModaldelete($id_pembimbing)
    {
        $this->modaldelete = true;
        $this->id_pembimbing = $id_pembimbing;
    }

    public function delete($id)
    {
        $pembimbing = PembimbingModel::find($id);
        $result = $pembimbing->delete();
        $this->closeModal();
    }
}
