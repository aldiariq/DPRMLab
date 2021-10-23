<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Laboratorium as LaboratoriumModel;
use App\Models\Fokuspenelitian as FokuspenelitianModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Laboratorium extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $id_laboratorium = null, $logo_laboratorium, $old_logo_laboratorium, $foto_laboratorium, $old_foto_laboratorium, $nama_laboratorium, $penjelasan_laboratorium, $instagram_laboratorium, $youtube_laboratorium, $github_laboratorium, $email_laboratorium, $warnatajuk_laboratorium;
    public $id_fokuspenelitian = null, $topik_fokuspenelitian;

    public $modalfokuspenelitian = false;
    public $modaldeletefokuspenelitian = false;

    public $modallaboratorium = false;

    public function render()
    {
        $laboratorium = LaboratoriumModel::all();
        $fokuspenelitian = FokuspenelitianModel::oldest()->simplePaginate(10);
        return view('livewire.laboratorium', [
            'laboratorium' => $laboratorium,
            'fokuspenelitian' => $fokuspenelitian
        ]);
    }

    public function showModalfokuspenelitian()
    {
        $this->modalfokuspenelitian = true;
    }

    public function showModallaboratorium()
    {
        $this->modallaboratorium = true;
    }

    public function closeModal()
    {
        $this->modallaboratorium = false;
        $this->modalfokuspenelitian = false;
        $this->modaldeletefokuspenelitian = false;
        $this->resetInput();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function resetInput()
    {
        $this->id_fokuspenelitian = null;
        $this->topik_fokuspenelitian = "";
    }

    public function storeFokuspenelitian()
    {
        $this->validate([
            'topik_fokuspenelitian' => 'required'
        ]);

        FokuspenelitianModel::updateOrCreate(['id_fokuspenelitians' => $this->id_fokuspenelitian], [
            'topik_fokuspenelitians' => $this->topik_fokuspenelitian
        ]);

        $this->closeModal();
    }

    public function editFokuspenelitian($id_fokuspenelitian)
    {
        $fokuspenelitian = FokuspenelitianModel::find($id_fokuspenelitian);
        $this->topik_fokuspenelitian = $fokuspenelitian->topik_fokuspenelitians;
        $this->id_fokuspenelitian = $id_fokuspenelitian;
        $this->showModalfokuspenelitian();
    }

    public function showModaldeletefokuspenelitian($id_fokuspenelitian)
    {
        $this->modaldeletefokuspenelitian = true;
        $this->id_fokuspenelitian = $id_fokuspenelitian;
    }

    public function deleteFokuspenelitian($id)
    {
        $fokuspenelitian = FokuspenelitianModel::find($id);
        $result = $fokuspenelitian->delete();
        $this->closeModal();
    }

    public function editLaboratorium($id_laboratorium)
    {
        $laboratorium = LaboratoriumModel::find($id_laboratorium);
        $this->logo_laboratorium = $laboratorium->logo_laboratoriums;
        $this->old_logo_laboratorium = $laboratorium->logo_laboratoriums;
        $this->foto_laboratorium = $laboratorium->foto_laboratoriums;
        $this->old_foto_laboratorium = $laboratorium->foto_laboratoriums;
        $this->nama_laboratorium = $laboratorium->nama_laboratoriums;
        $this->penjelasan_laboratorium = $laboratorium->penjelasan_laboratoriums;
        $this->instagram_laboratorium = $laboratorium->instagram_laboratoriums;
        $this->youtube_laboratorium = $laboratorium->youtube_laboratoriums;
        $this->github_laboratorium = $laboratorium->github_laboratoriums;
        $this->email_laboratorium = $laboratorium->email_laboratoriums;
        $this->warnatajuk_laboratorium = $laboratorium->warnatajuk_laboratoriums;
        $this->id_laboratorium = $laboratorium->id_laboratoriums;
        $this->showModallaboratorium();
    }

    public function storeLaboratorium()
    {
        $imageValidationlogo = '';
        if ($this->old_logo_laboratorium == null) {
            $imageValidationlogo = "required|image|mimes:jpg,jpeg,png|max:1024";
        }

        $imageValidationfoto = '';
        if ($this->old_foto_laboratorium == null) {
            $imageValidationfoto = "required|image|mimes:jpg,jpeg,png|max:1024";
        }

        $this->validate([
            'nama_laboratorium' => 'required',
            'penjelasan_laboratorium' => 'required',
            'instagram_laboratorium' => 'required',
            'youtube_laboratorium' => 'required',
            'github_laboratorium' => 'required',
            'email_laboratorium' => 'required',
            'warnatajuk_laboratorium' => 'required',
            'logo_laboratorium' => $imageValidationlogo,
            'foto_laboratorium' => $imageValidationfoto
        ]);

        
        
        if ($this->logo_laboratorium != $this->old_logo_laboratorium) {
            $fileNamelogo = $this->logo_laboratorium->store('public/laboratorium');
        } else {
            $fileNamelogo = $this->logo_laboratorium;
        }

        if ($this->foto_laboratorium != $this->old_foto_laboratorium) {
            $fileNamefoto = $this->foto_laboratorium->store('public/laboratorium');
        } else {
            $fileNamefoto = $this->foto_laboratorium;
        }

        LaboratoriumModel::updateOrCreate(['id_laboratoriums' => $this->id_laboratorium], [
            'logo_laboratoriums' => $fileNamelogo,
            'foto_laboratoriums' => $fileNamefoto,
            'nama_laboratoriums' => $this->nama_laboratorium,
            'penjelasan_laboratoriums' => $this->penjelasan_laboratorium,
            'instagram_laboratoriums' => $this->instagram_laboratorium,
            'youtube_laboratoriums' => $this->youtube_laboratorium,
            'github_laboratoriums' => $this->github_laboratorium,
            'warnatajuk_laboratoriums' => $this->warnatajuk_laboratorium
        ]);

        $this->closeModal();
    }
}
