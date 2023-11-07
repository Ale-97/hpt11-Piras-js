<?php

namespace App\Livewire;

use Livewire\Component;

class SearchArticle extends Component
{
    public $search='';
    public function render()
    {
        $column='title';
        $list= \App\Models\Article::search($this->search,$column);
        return view('livewire.searchElement',compact('list','column'));
    }
}

