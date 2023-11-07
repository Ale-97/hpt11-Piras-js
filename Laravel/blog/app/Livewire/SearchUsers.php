<?php

namespace App\Livewire;

use Livewire\Component;

class SearchUsers extends Component
{
    public $search='';
    public function render()
    {
        $column='name';
        $list= \App\Models\User::search($this->search,$column);
        return view('livewire.searchElement',compact('list','column'));
    }
}
