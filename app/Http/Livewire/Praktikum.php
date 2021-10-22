<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Praktikum as PraktikumModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Praktikum extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $id_praktikum = null, $hari_praktikum, $waktumulai_praktikum, $waktuselesai_praktikum, $matakuliah_praktikum, $kelas_praktikum, $dosen_praktikum;
    public $modal = false;
    public $modaldelete = false;

    public function render()
    {
        $praktikum = PraktikumModel::latest()->simplePaginate(10);
        return view('livewire.praktikum', [
            'praktikum' => $praktikum
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
        $this->id_praktikum = null;
        $this->hari_praktikum = "";
        $this->waktumulai_praktikum = "";
        $this->waktuselesai_praktikum = "";
        $this->matakuliah_praktikum = "";
        $this->kelas_praktikum = "";
        $this->dosen_praktikum = "";
    }

    public function store()
    {
        $this->validate([
            'hari_praktikum' => 'required',
            'waktumulai_praktikum' => 'required',
            'waktuselesai_praktikum' => 'required',
            'matakuliah_praktikum' => 'required',
            'kelas_praktikum' => 'required',
            'dosen_praktikum' => 'required'
        ]);

        PraktikumModel::updateOrCreate(['id_praktikums' => $this->id_praktikum], [
            'hari_praktikums' => $this->hari_praktikum,
            'waktumulai_praktikums' => $this->waktumulai_praktikum,
            'waktuselesai_praktikums' => $this->waktuselesai_praktikum,
            'matakuliah_praktikums' => $this->matakuliah_praktikum,
            'kelas_praktikums' => $this->kelas_praktikum,
            'dosen_praktikums' => $this->dosen_praktikum
        ]);

        $this->closeModal();
    }

    public function edit($id_praktikum)
    {
        $praktikum = PraktikumModel::find($id_praktikum);
        $this->hari_praktikum = $praktikum->hari_praktikums;
        $this->waktumulai_praktikum = $praktikum->waktumulai_praktikums;
        $this->waktuselesai_praktikum = $praktikum->waktuselesai_praktikums;
        $this->matakuliah_praktikum = $praktikum->matakuliah_praktikums;
        $this->kelas_praktikum = $praktikum->kelas_praktikums;
        $this->dosen_praktikum = $praktikum->dosen_praktikums;
        $this->id_praktikum = $praktikum->id_praktikums;
        $this->showModal();
    }

    public function showModaldelete($id_praktikum)
    {
        $this->modaldelete = true;
        $this->id_praktikum = $id_praktikum;
    }

    public function delete($id)
    {
        $praktikum = PraktikumModel::find($id);
        $result = $praktikum->delete();
        $this->closeModal();
    }
}
