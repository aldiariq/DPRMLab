<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Berita as BeritaModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Berita extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $id_berita = null, $judul_berita, $tanggal_berita, $foto_berita, $old_foto_berita, $isi_berita;
    public $modal = false;
    public $modaldelete = false;

    public function render()
    {
        $berita = BeritaModel::oldest()->simplePaginate(10);
        return view('livewire.berita', [
            'berita' => $berita
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
        $this->id_berita = null;
        $this->judul_berita = "";
        $this->tanggal_berita = "";
        $this->foto_berita = null;
        $this->old_foto_berita = null;
        $this->isi_berita = "";
    }

    public function store()
    {
        $imageValidation = '';
        if ($this->old_foto_berita == null) {
            $imageValidation = "required|image|mimes:jpg,jpeg,png|max:1024";
        }

        $this->validate([
            'judul_berita' => 'required',
            'tanggal_berita' => 'required',
            'foto_berita' => $imageValidation,
            'isi_berita' => 'required',
        ]);

        if ($this->foto_berita != $this->old_foto_berita) {
            $fileName = $this->foto_berita->store('public/berita');
        } else {
            $fileName = $this->foto_berita;
        }

        BeritaModel::updateOrCreate(['id_beritas' => $this->id_berita], [
            'judul_beritas' => $this->judul_berita,
            'tanggal_beritas' => $this->tanggal_berita,
            'foto_beritas' => $fileName,
            'isi_beritas' => $this->isi_berita,
        ]);

        $this->closeModal();
    }

    public function edit($id_berita)
    {
        $berita = BeritaModel::find($id_berita);
        $this->judul_berita = $berita->judul_beritas;
        $this->tanggal_berita = $berita->tanggal_beritas;
        $this->foto_berita = $berita->foto_beritas;
        $this->old_foto_berita = $berita->foto_beritas;
        $this->isi_berita = $berita->isi_beritas;
        $this->id_berita = $id_berita;
        $this->showModal();
    }

    public function showModaldelete($id_berita)
    {
        $this->modaldelete = true;
        $this->id_berita = $id_berita;
    }

    public function delete($id)
    {
        $berita = BeritaModel::find($id);
        $result = $berita->delete();
        $this->closeModal();
    }
}
