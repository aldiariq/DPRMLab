<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Penelitian as PenelitianModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Penelitian extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $id_penelitian = null, $judul_penelitian, $nama_penelitian, $tanggal_penelitian, $status_penelitian, $penjelasan_penelitian, $foto_penelitian, $old_foto_penelitian;
    public $modal = false;
    public $modaldelete = false;

    public function render()
    {
        $penelitian = PenelitianModel::latest()->simplePaginate(10);
        return view('livewire.penelitian', [
            'penelitian' => $penelitian
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
        $this->id_penelitian = null;
        $this->judul_penelitian = "";
        $this->nama_penelitian = "";
        $this->tanggal_penelitian = "";
        $this->status_penelitian = "";
        $this->penjelasan_penelitian = "";
        $this->foto_penelitian = null;
        $this->old_foto_penelitian = null;
    }

    public function store()
    {
        $imageValidation = '';
        if ($this->old_foto_penelitian == null) {
            $imageValidation = "required|image|mimes:jpg,jpeg,png|max:1024";
        }

        $this->validate([
            'judul_penelitian' => 'required',
            'nama_penelitian' => 'required',
            'tanggal_penelitian' => 'required',
            'status_penelitian' => 'required',
            'penjelasan_penelitian' => 'required',
            'foto_penelitian' => $imageValidation
        ]);

        if ($this->foto_penelitian != $this->old_foto_penelitian) {
            $fileName = $this->foto_penelitian->store('public/penelitian');
        } else {
            $fileName = $this->foto_penelitian;
        }

        PenelitianModel::updateOrCreate(['id_penelitian' => $this->id_penelitian], [
            'judul_penelitian' => $this->judul_penelitian,
            'nama_penelitian' => $this->nama_penelitian,
            'tanggal_penelitian' => $this->tanggal_penelitian,
            'status_penelitian' => $this->status_penelitian,
            'penjelasan_penelitian' => $this->penjelasan_penelitian,
            'foto_penelitian' => $fileName
        ]);

        $this->closeModal();
    }

    public function edit($id_penelitian)
    {
        $penelitian = PenelitianModel::find($id_penelitian);
        $this->judul_penelitian = $penelitian->judul_penelitian;
        $this->nama_penelitian = $penelitian->nama_penelitian;
        $this->tanggal_penelitian = $penelitian->tanggal_penelitian;
        $this->status_penelitian = $penelitian->status_penelitian;
        $this->penjelasan_penelitian = $penelitian->penjelasan_penelitian;
        $this->foto_penelitian = $penelitian->foto_penelitian;
        $this->old_foto_penelitian = $penelitian->foto_penelitian;
        $this->id_penelitian = $penelitian->id_penelitian;
        $this->showModal();
    }

    public function showModaldelete($id_penelitian)
    {
        $this->modaldelete = true;
        $this->id_penelitian = $id_penelitian;
    }

    public function delete($id)
    {
        $penelitian = PenelitianModel::find($id);
        $result = $penelitian->delete();
        $this->closeModal();
    }
}
