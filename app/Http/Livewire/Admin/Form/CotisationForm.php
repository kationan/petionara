<?php

namespace App\Http\Livewire\Admin\Form;

use Livewire\Component;
use App\Models\User;

class CotisationForm extends Component
{
    public $members = array();
    public function render()
    {
        $this->members = User::all();
        return view('livewire.admin.form.cotisation-form',["members"=>$this->members]);
    }
}
