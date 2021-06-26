<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Networks extends Component
{
    public $title;
    public $icon;
    public $background_color;
    public $icon_color;

    public function render()
    {
        return view('livewire.networks');
    }
}
