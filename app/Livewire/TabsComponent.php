<?php

namespace App\Livewire;

use Livewire\Component;

class TabsComponent extends Component
{
    public $activeTab = 'experience';
    public function render()
    {
        return view('livewire.tabs-component');
    }
}
