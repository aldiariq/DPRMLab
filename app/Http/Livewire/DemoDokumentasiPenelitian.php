<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DemoDokumentasiPenelitian as DemoDokumentasiPenelitianModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class DemoDokumentasiPenelitian extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $id_demo_dokumentasi_penelitian = null, $id_penelitian, $ket_demo_dokumentasi_penelitian, $linkvideo_demo_dokumentasi_penelitian;
    public $modal = false;
    public $modaldelete = false;

    public function render()
    {
        $demodokumentasi_penelitian = DemoDokumentasiPenelitianModel::latest()->simplePaginate(10);
        return view('livewire.demo-dokumentasi-penelitian', [
            'demodokumentasi_penelitian' => $demodokumentasi_penelitian
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
        $this->id_demo_dokumentasi_penelitian = null;
        $this->id_penelitian = "";
        $this->ket_demo_dokumentasi_penelitian = "";
        $this->linkvideo_demo_dokumentasi_penelitian = "";
    }

    public function store()
    {
        $this->validate([
            'id_penelitian' => 'required',
            'ket_demo_dokumentasi_penelitian' => 'required',
            'linkvideo_demo_dokumentasi_penelitian' => 'required'
        ]);

        DemoDokumentasiPenelitianModel::updateOrCreate(['id_demo_dokumentasi_penelitian' => $this->id_demo_dokumentasi_penelitian], [
            'id_penelitian' => $this->id_penelitian,
            'ket_demo_dokumentasi_penelitian' => $this->ket_demo_dokumentasi_penelitian,
            'linkvideo_demo_dokumentasi_penelitian' => $this->linkvideo_demo_dokumentasi_penelitian
        ]);

        $this->closeModal();
    }

    public function edit($id_demo_dokumentasi_penelitian)
    {
        $demodokumentasi_penelitian = DemoDokumentasiPenelitianModel::find($id_demo_dokumentasi_penelitian);
        $this->id_penelitian = $demodokumentasi_penelitian->id_penelitian;
        $this->ket_demo_dokumentasi_penelitian = $demodokumentasi_penelitian->ket_demo_dokumentasi_penelitian;
        $this->linkvideo_demo_dokumentasi_penelitian = $demodokumentasi_penelitian->linkvideo_demo_dokumentasi_penelitian;
        $this->id_demo_dokumentasi_penelitian = $demodokumentasi_penelitian->id_demo_dokumentasi_penelitian;
        $this->showModal();
    }

    public function showModaldelete($id_demo_dokumentasi_penelitian)
    {
        $this->modaldelete = true;
        $this->id_demo_dokumentasi_penelitian = $id_demo_dokumentasi_penelitian;
    }

    public function delete($id)
    {
        $demodokumentasi_penelitian = DemoDokumentasiPenelitianModel::find($id);
        $result = $demodokumentasi_penelitian->delete();
        $this->closeModal();
    }
}
