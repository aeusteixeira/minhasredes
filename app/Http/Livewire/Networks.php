<?php

namespace App\Http\Livewire;

use App\Models\Network;
use Livewire\Component;

class Networks extends Component
{
    public $title;
    public $icon;
    public $action;
    public $action_type;
    public $background_color;
    public $icon_color;

    public $networks;
    public $listeners = ['staffDirectoryRefresh' => 'render'];

    public function render()
    {
        return view('livewire.networks');
    }

    public function mount()
    {
        $this->networks = Network::all();
    }

    public function submit()
    {
        Network::create([
            'title' => $this->title,
            'icon' => $this->icon,
            'action' => $this->action,
            'action_type' => $this->action_type,
        ]);

        $this->clear_fields();
    }

    public function delete(Network $network)
    {
        $network->delete();
        $this->emit('staffDirectoryRefresh');
    }

    private function clear_fields()
    {
        $this->title = '';
        $this->icon = '';
        $this->action = '';
        $this->action_type = '';
    }
}
