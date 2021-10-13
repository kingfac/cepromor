<?php

namespace App\Http\Livewire\Client;

use App\Models\objet;
use App\Models\requete;
use Livewire\Component;


class Requetes extends Component
{
    public $objets;
    public $requetes;
    public $objet_id;
    public $lib;
    public $message;
    public $noms;
    public $selected;
    public $tel;
    public $email;

    public function mount($id){
        $this->objet_id = $id;
    }

    public function render()
    {
        $this->objets = objet::all();
        $this->requetes = requete::all();
        return view('livewire.client.requetes');
    }

    public function store(){
        $validation = $this->validate([
            'noms'=>'required',
            'tel'=>'required',
            'email'=>'email|required',
            'message'=>'required',
            'objet_id'=>'required'
        ]);

        requete::create($validation);
        $this->emit('requete');
        $this->dispatchBrowserEvent('Added');
        $this->resetFields();
    }

    public function resetFields(){
        $this->message = '';
        $this->lib = '';
        $this->noms = '';
        $this->objet_id = '';
        $this->tel = '';
        $this->email = '';
    }

    public function update(){
        $this->validate([
            'selected'=>'required',
            'message'=>'required',
            'noms'=>'required',
            'objet_id'=>'required'
        ]);

        $record = requete::create([
            'message'=> $this->message,
            'noms'=> $this->noms,
            'objet_id'=> $this->objet_id
        ]);

        $this->emit('requete');
        $this->dispatchBrowserEvent('Updated');
        $this->resetFields();
    }

    
}
