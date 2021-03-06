<?php

namespace App\Http\Livewire\Admin;

use App\Models\ceproInfo;
use Livewire\Component;

class CeproInfos extends Component
{
    public $info;
    public $lib;
    public $selectedId;
    public $infos;

    public function render()
    {
        $this->infos = ceproInfo::all();
        return view('livewire.admin.cepro-infos');
    }

    function resetFields(){
        $this->selectedId  = 0;
        $this->lib  = '';
        $this->info  = '';
    }

    function store(){
        //dd($this->lib, $this->info);
        //$this->info = html_entity_decode($this->info);
        $validatedData = $this->validate([
           'lib' => 'required',
           'info' => 'required'
       ]);      
       
       //dd($validatedData);
       ceproInfo::create($validatedData);
       session()->flash('message', 'Info enregistré avec succès');
       $this->emit('Added');
       //$this->infos = ceproInfo::all();
       $this->resetFields();
    }
    public function update(){
        $v = $this->validate([
            'lib' => 'required',
            'selectedId' => 'required',
            'info' => 'required'
        ]);
        //dd($v);
        $record = ceproInfo::find($this->selectedId);
        $record->update([
            'lib' => $this->lib,
            'info' => $this->info
        ]);
        $this->resetFields();
        session()->flash('message', 'Info modifié avec succès');
        $this->emit('Updated');
        $this->dispatchBrowserEvent('Updated');
    }

    function delete(){
        $v = $this->validate([
            'lib' => 'required',
            'selectedId' => 'required',
            'info' => 'required'
        ]);
        //dd($v);
        $record = ceproInfo::find($this->selectedId);
        $record->delete();
        $this->resetFields();
        session()->flash('message', 'Info Supprimé avec succès');
        $this->emit('Deleted');
        $this->dispatchBrowserEvent('Deleted');
    }
    function charger($ligne){
        $this->selectedId = $ligne["id"];
        $this->lib = $ligne["lib"];
        $this->info = $ligne["info"];
    }

    function aa(){
        dd('bonjourno');
    }
}
