<?php

namespace App\Livewire\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public $user;

    public function mount()
    {
        $this->user = Auth::user();  
    }
    public function render()
    {
        return view('livewire.dashboard.dashboard')->layout('components.layouts.dashboard');
    }
}
