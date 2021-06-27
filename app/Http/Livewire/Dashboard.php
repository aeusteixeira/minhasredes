<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Dashboard extends Component
{
    public $name;
    public $description;

    public $setting;

    public function render()
    {
        return view('livewire.dashboard');
    }

    public function mount()
    {
        $this->setting = Setting::find(1);
        $this->name = $this->setting->name;
        $this->description = $this->setting->description;

    }

    public function updatedName($value)
    {
        $this->name = $value;
        $this->setting->name = $this->name;
        $this->setting->save();
    }

    public function updatedDescription($value)
    {
        $this->description = $value;
        $this->setting->description = $this->description;
        $this->setting->save();
    }
}
