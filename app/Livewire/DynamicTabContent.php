<?php

namespace App\Livewire;

use Livewire\Component;

class DynamicTabContent extends Component
{
    public $currentTab = 'about'; // Default tab
    public function loadTab($tab)
    {
        $this->currentTab = $tab;
    }
    public function render()
    {
        return view('livewire.dynamic-tab-content');
    }
}
