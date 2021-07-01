<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bimbingan as BimbinganModel;
use App\Models\Anggota as AnggotaModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Bimbingan extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $id_bimbingan = null, $id_anggota, $nama_anggota, $tanggal_bimbingan, $ket_bimbingan;
    public $modal = false;
    public $modaldelete = false;

    public function render()
    {
        // $bimbingan = BimbinganModel::latest()->simplePaginate(10);
        $bimbingan = BimbinganModel::join('anggotas', 'anggotas.id_anggota', '=', 'bimbingans.id_anggota')
            ->select('bimbingans.*', 'anggotas.id_anggota', 'anggotas.nama_anggota')
            ->groupBy('bimbingans.id_bimbingan')
            ->orderBy('created_at', 'DESC')->simplePaginate(10);

        $anggota = AnggotaModel::all();

        // dd($anggota);

        return view('livewire.bimbingan', [
            'bimbingan' => $bimbingan,
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
    }

    public function resetInput()
    {
        $this->id_bimbingan = null;
        $this->id_anggota = "";
        $this->nama_anggota = "";
        $this->tanggal_bimbingan = "";
        $this->ket_bimbingan = "";
    }

    public function store()
    {
        // dd($this->id_anggota.$this->tanggal_bimbingan.$this->ket_bimbingan);

        $this->validate([
            'id_anggota' => 'required',
            'tanggal_bimbingan' => 'required',
            'ket_bimbingan' => 'required'
        ]);

        // dd($this->id_anggota.$this->tanggal_bimbingan.$this->ket_bimbingan);

        BimbinganModel::updateOrCreate(['id_bimbingan' => $this->id_bimbingan], [
            'id_anggota' => $this->id_anggota,
            'tanggal_bimbingan' => $this->tanggal_bimbingan,
            'ket_bimbingan' => $this->ket_bimbingan
        ]);

        $this->closeModal();
    }

    public function edit($id_bimbingan)
    {
        // $bimbingan = BimbinganModel::find($id_bimbingan);
        $bimbingan = BimbinganModel::join('anggotas', 'anggotas.id_anggota', '=', 'bimbingans.id_anggota')
            ->select('bimbingans.*', 'anggotas.nama_anggota')
            ->groupBy('bimbingans.id_bimbingan')
            ->where('bimbingans.id_bimbingan', $id_bimbingan)->first();

        // dd($bimbingan);

        $this->id_anggota = $bimbingan->id_anggota;
        $this->nama_anggota = $bimbingan->nama_anggota;
        $this->tanggal_bimbingan = $bimbingan->tanggal_bimbingan;
        $this->ket_bimbingan = $bimbingan->ket_bimbingan;
        $this->id_bimbingan = $id_bimbingan;
        $this->showModal();
    }

    public function showModaldelete($id_bimbingan)
    {
        $this->modaldelete = true;
        $this->id_bimbingan = $id_bimbingan;
    }

    public function delete($id)
    {
        $bimbingan = BimbinganModel::find($id);
        $result = $bimbingan->delete();
        $this->closeModal();
    }
}
