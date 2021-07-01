<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Anggota as AnggotaModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Anggota extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $id_anggota = null, $nim_anggota, $nama_anggota, $ket_anggota, $foto_anggota, $old_foto_anggota;
    public $modal = false;
    public $modaldelete = false;

    public function render()
    {
        $anggota = AnggotaModel::latest()->simplePaginate(10);
        return view('livewire.anggota', [
            'anggota' => $anggota
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
        $this->id_anggota = null;
        $this->nim_anggota = "";
        $this->nama_anggota = "";
        $this->ket_anggota = "";
        $this->foto_anggota = null;
        $this->old_foto_anggota = null;
    }

    public function store()
    {
        $imageValidation = '';
        if ($this->old_foto_anggota == null) {
            $imageValidation = "required|image|mimes:jpg,jpeg,png|max:1024";
        }

        $this->validate([
            'nim_anggota' => 'required',
            'nama_anggota' => 'required',
            'ket_anggota' => 'required',
            'foto_anggota' => $imageValidation
        ]);

        if ($this->foto_anggota != $this->old_foto_anggota) {
            $fileName = $this->foto_anggota->store('public/anggota');
        } else {
            $fileName = $this->foto_anggota;
        }

        AnggotaModel::updateOrCreate(['id_anggota' => $this->id_anggota], [
            'nim_anggota' => $this->nim_anggota,
            'nama_anggota' => $this->nama_anggota,
            'ket_anggota' => $this->ket_anggota,
            'foto_anggota' => $fileName
        ]);

        $this->closeModal();
    }

    public function edit($id_anggota)
    {
        $anggota = AnggotaModel::find($id_anggota);
        $this->nim_anggota = $anggota->nim_anggota;
        $this->nama_anggota = $anggota->nama_anggota;
        $this->ket_anggota = $anggota->ket_anggota;
        $this->foto_anggota = $anggota->foto_anggota;
        $this->old_foto_anggota = $anggota->foto_anggota;
        $this->id_anggota = $id_anggota;
        $this->showModal();
    }

    public function showModaldelete($id_anggota)
    {
        $this->modaldelete = true;
        $this->id_anggota = $id_anggota;
    }

    public function delete($id)
    {
        $anggota = AnggotaModel::find($id);
        $result = $anggota->delete();
        $this->closeModal();
    }
}
