<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pembimbing as PembimbingModel;
use App\Models\Penelitian as PenelitianModel;
use App\Models\PublikasiPenelitian as PublikasiPenelitianModel;
use App\Models\DemoDokumentasiPenelitian as DemoDokumentasiPenelitianModel;
use App\Models\Anggota as AnggotaModel;
use App\Models\Bimbingan as BimbinganModel;
use App\Models\Saranmasukan as SaranmasukanModel;
use App\Models\Praktikum as PraktikumModel;
use App\Models\Laboratorium as LaboratoriumModel;
use App\Models\Fokuspenelitian as FokuspenelitianModel;
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
        $penelitian = PenelitianModel::latest()->limit(10)->get();
        $publikasi_penelitian_terbaru = PublikasiPenelitianModel::join('penelitians', 'penelitians.id_penelitian', '=', 'publikasi_penelitians.id_penelitian')
            ->select('publikasi_penelitians.*', 'penelitians.id_penelitian', 'penelitians.judul_penelitian', 'penelitians.nama_penelitian')
            ->groupBy('publikasi_penelitians.id_publikasi_penelitian')->latest()->limit(2)->get();
        $publikasi_penelitian = PublikasiPenelitianModel::join('penelitians', 'penelitians.id_penelitian', '=', 'publikasi_penelitians.id_penelitian')
            ->select('publikasi_penelitians.*', 'penelitians.id_penelitian', 'penelitians.judul_penelitian', 'penelitians.nama_penelitian')
            ->groupBy('publikasi_penelitians.id_publikasi_penelitian')->latest()->limit(10)->get();
        $demodokumentasi_penelitian_terbaru = $demodokumentasi_penelitian = DemoDokumentasiPenelitianModel::join('penelitians', 'penelitians.id_penelitian', '=', 'demo_dokumentasi_penelitians.id_penelitian')
            ->select('demo_dokumentasi_penelitians.*', 'penelitians.id_penelitian', 'penelitians.judul_penelitian', 'penelitians.nama_penelitian')
            ->groupBy('demo_dokumentasi_penelitians.id_demo_dokumentasi_penelitian')->latest()->limit(2)->get();
        $demodokumentasi_penelitian = $demodokumentasi_penelitian = DemoDokumentasiPenelitianModel::join('penelitians', 'penelitians.id_penelitian', '=', 'demo_dokumentasi_penelitians.id_penelitian')
            ->select('demo_dokumentasi_penelitians.*', 'penelitians.id_penelitian', 'penelitians.judul_penelitian', 'penelitians.nama_penelitian')
            ->groupBy('demo_dokumentasi_penelitians.id_demo_dokumentasi_penelitian')->latest()->limit(10)->get();
        $anggota = AnggotaModel::all();
        $praktikum = PraktikumModel::select('praktikums.*')->simplePaginate(5);
        $laboratorium = LaboratoriumModel::all();
        $fokuspenelitian = FokuspenelitianModel::all();
        
        return view('livewire.index', [
            'pembimbing' => $pembimbing,
            'penelitianterbaru' => $penelitianterbaru,
            'penelitian' => $penelitian,
            'publikasi_penelitian_terbaru' => $publikasi_penelitian_terbaru,
            'publikasi_penelitian' => $publikasi_penelitian,
            'demodokumentasi_penelitian_terbaru' => $demodokumentasi_penelitian_terbaru,
            'demodokumentasi_penelitian' => $demodokumentasi_penelitian,
            'bimbingan' => $bimbingan,
            'anggota' => $anggota,
            'praktikum' => $praktikum,
            'laboratorium' => $laboratorium,
            'fokuspenelitian' => $fokuspenelitian
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
