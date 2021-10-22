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
    public $modallaboratorium = false;
    public $modalfokuspenelitian = false;
    public $modaldeletefokuspenelitian = false;

    public function render()
    {
        $laboratorium = LaboratoriumModel::all();
        $fokuspenelitian = FokuspenelitianModel::oldest()->simplePaginate(10);
        return view('livewire.laboratorium', [
            'laboratorium' => $laboratorium,
            'fokuspenelitian' => $fokuspenelitian
        ]);
    }

    public function showModallaboratorium()
    {
        $this->modallaboratorium = true;
    }

    public function showModalpenelitian()
    {
        $this->modalfokuspenelitian = true;
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
}
