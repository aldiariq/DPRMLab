<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PublikasiPenelitian as PublikasiPenelitianModel;
use App\Models\Penelitian as PenelitianModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class PublikasiPenelitian extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $id_publikasi_penelitian = null, $id_penelitian, $tempat_publikasi_penelitian, $ket_publikasi_penelitian, $tanggal_publikasi_penelitian, $foto_publikasi_penelitian, $old_foto_publikasi_penelitian;
    public $modal = false;
    public $modaldelete = false;

    public function render()
    {
        $publikasi_penelitian = PublikasiPenelitianModel::join('penelitians', 'penelitians.id_penelitian', '=', 'publikasi_penelitians.id_penelitian')
            ->select('publikasi_penelitians.*', 'penelitians.id_penelitian', 'penelitians.judul_penelitian', 'penelitians.nama_penelitian')
            ->groupBy('publikasi_penelitians.id_publikasi_penelitian')->simplePaginate(10);

        $penelitian = PenelitianModel::orderBy('penelitians.nama_penelitian', 'ASC')->get();
        return view('livewire.publikasi-penelitian', [
            'publikasi_penelitian' => $publikasi_penelitian,
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
        $this->id_publikasi_penelitian = null;
        $this->id_penelitian = "";
        $this->tempat_publikasi_penelitian = "";
        $this->ket_publikasi_penelitian = "";
        $this->tanggal_publikasi_penelitian = "";
        $this->foto_publikasi_penelitian = null;
        $this->old_foto_publikasi_penelitian = null;
    }

    public function store()
    {
        $imageValidation = '';
        if ($this->old_foto_publikasi_penelitian == null) {
            $imageValidation = "required|image|mimes:jpg,jpeg,png|max:1024";
        }

        $this->validate([
            'id_penelitian' => 'required',
            'tempat_publikasi_penelitian' => 'required',
            'ket_publikasi_penelitian' => 'required',
            'tanggal_publikasi_penelitian' => 'required',
            'foto_publikasi_penelitian' => $imageValidation
        ]);

        if ($this->foto_publikasi_penelitian != $this->old_foto_publikasi_penelitian) {
            $fileName = $this->foto_publikasi_penelitian->store('public/publikasi_penelitian');
        } else {
            $fileName = $this->foto_publikasi_penelitian;
        }

        PublikasiPenelitianModel::updateOrCreate(['id_publikasi_penelitian' => $this->id_publikasi_penelitian], [
            'id_penelitian' => $this->id_penelitian,
            'tempat_publikasi_penelitian' => $this->tempat_publikasi_penelitian,
            'ket_publikasi_penelitian' => $this->ket_publikasi_penelitian,
            'tanggal_publikasi_penelitian' => $this->tanggal_publikasi_penelitian,
            'foto_publikasi_penelitian' => $fileName
        ]);

        $this->closeModal();
    }

    public function edit($id_publikasi_penelitian)
    {
        $publikasi_penelitian = PublikasiPenelitianModel::find($id_publikasi_penelitian);
        $this->id_penelitian = $publikasi_penelitian->id_penelitian;
        $this->tempat_publikasi_penelitian = $publikasi_penelitian->tempat_publikasi_penelitian;
        $this->ket_publikasi_penelitian = $publikasi_penelitian->ket_publikasi_penelitian;
        $this->tanggal_publikasi_penelitian = $publikasi_penelitian->tanggal_publikasi_penelitian;
        $this->foto_publikasi_penelitian = $publikasi_penelitian->foto_publikasi_penelitian;
        $this->old_foto_publikasi_penelitian = $publikasi_penelitian->foto_publikasi_penelitian;
        $this->id_publikasi_penelitian = $publikasi_penelitian->id_publikasi_penelitian;
        $this->showModal();
    }

    public function showModaldelete($id_publikasi_penelitian)
    {
        $this->modaldelete = true;
        $this->id_publikasi_penelitian = $id_publikasi_penelitian;
    }

    public function delete($id)
    {
        $publikasi_penelitian = PublikasiPenelitianModel::find($id);
        $result = $publikasi_penelitian->delete();
        $this->closeModal();
    }
}
