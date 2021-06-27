<?php

namespace App\Http\Livewire;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Dashboard extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $image;
    public $TempImage;

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
        $this->image = $this->setting->image;

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

    public function updatedImage($value)
    {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);

        $this->image = $this->image->store('public/images');
        $this->setting->image = $this->image;
        $this->setting->save();
    }

    public function saveImage()
    {

    }
}
