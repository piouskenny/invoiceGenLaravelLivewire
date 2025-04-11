<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class HomeController extends Component
{
    #[Title('Home Page')]
    public function render()
    {
        return view('livewire.home-controller')->layout('components.layouts.landing');
    }
}
