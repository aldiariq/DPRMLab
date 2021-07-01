<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Saranmasukan as SaranmasukanModel;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Saranmasukan extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $id_saranmasukan = null, $isi_saranmasukan, $tanggal_saranmasukan;
    public $modaldelete = false;

    public function render()
    {
        $saranmasukan = SaranmasukanModel::latest()->simplePaginate(10);

        return view('livewire.saranmasukan', [
            'saranmasukan' => $saranmasukan
        ]);
    }

    public function closeModal()
    {
        $this->modaldelete = false;
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->id_saranmasukan = null;
        $this->isi_saranmasukan = "";
        $this->tanggal_saranmasukan = "";
    }

    public function showModaldelete($id_saranmasukan)
    {
        $this->modaldelete = true;
        $this->id_saranmasukan = $id_saranmasukan;
    }

    public function delete($id)
    {
        $saranmasukan = SaranmasukanModel::find($id);
        $result = $saranmasukan->delete();
        $this->closeModal();
    }
}
