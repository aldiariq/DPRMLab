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
}
