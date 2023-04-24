<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use App\Models\Cotisations;

class Cotisations extends Component
{
    public $transactions = array();
    
    public function render()
    {
        
        return view('livewire.cotisations');
    }
    // public function cotisations()
    // {
    //     $transactions = App\Models\Cotisation::where('user_id', auth()->user()->id);
    //     dd($transactions);
    // }
}
