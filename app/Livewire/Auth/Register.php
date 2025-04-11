<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Livewire\Attributes\Title;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    public function submit() {
        $this->validate();
        $this->user->register($this->name, $this->email, $this->password);
        $this->reset();
    }

    #[Title('Register')]
    public function render()
    {
        return view('livewire.auth.register')->layout('components.layouts.landing');;
    }
}
