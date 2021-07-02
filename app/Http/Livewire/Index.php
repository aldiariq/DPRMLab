<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pembimbing as PembimbingModel;
use App\Models\Penelitian as PenelitianModel;
use App\Models\Anggota as AnggotaModel;
use App\Models\Bimbingan as BimbinganModel;
use App\Models\Saranmasukan as SaranmasukanModel;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $isi_saranmasukan;
    public $modal = false;

    public function render()
    {
        $pembimbing = PembimbingModel::all();

        $tanggalsekarang = today()->format('Y-m-d');
        $bimbingan = BimbinganModel::join('anggotas', 'anggotas.id_anggota', '=', 'bimbingans.id_anggota')
            ->select('bimbingans.*', 'anggotas.id_anggota', 'anggotas.nama_anggota')
            ->where('bimbingans.tanggal_bimbingan', '>=', $tanggalsekarang)
            ->groupBy('bimbingans.id_bimbingan')
            ->orderBy('bimbingans.tanggal_bimbingan', 'DESC')->simplePaginate(5);

        $penelitianterbaru = PenelitianModel::latest()->limit(2)->get();
        $penelitian = PenelitianModel::oldest()->get();

        $anggota = AnggotaModel::all();

        return view('livewire.index', [
            'pembimbing' => $pembimbing,
            'penelitianterbaru' => $penelitianterbaru,
            'penelitian' => $penelitian,
            'bimbingan' => $bimbingan,
            'anggota' => $anggota
        ]);
    }

    public function resetInput()
    {
        $this->isi_saranmasukan = null;
    }

    public function store()
    {
        $this->validate([
            'isi_saranmasukan' => 'required'
        ]);

        $result = SaranmasukanModel::create([
            'isi_saranmasukan' => $this->isi_saranmasukan,
            'tanggal_saranmasukan' => today()->format('Y-m-d')
        ]);

        $this->emit('userStore');

        // if ($result != "0") {
        //     $this->dispatchBrowserEvent('showModal');
        // } else {
        //     $this->modal = false;
        // }

        $this->resetInput();
    }
}
