<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\temoignage;

class HomeMain extends Component
{

    public $temoignages;
    public function render()
    {
        $this->temoignages = temoignage::all();
        return view('livewire.home-main');
    }
}
