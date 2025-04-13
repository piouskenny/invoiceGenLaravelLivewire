<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email|exists:users,email',  // Use exists instead of unique
        'password' => 'required|min:8',
    ];

    public function submit()
    {
        $this->validate();

        if (Auth::attempt(credentials: ['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Login successful');
            $this->redirectRoute('dashboard');
        } else {
            session()->flash('error', 'Invalid credentials');
        }

        $this->reset(['email', 'password']);  
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.landing');
    }
}
