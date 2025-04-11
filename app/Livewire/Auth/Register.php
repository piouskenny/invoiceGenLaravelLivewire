<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Title;

class Register extends Component
{
    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email', 
        'password' => 'required|min:8',
    ];

    public function submit() {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password), 
        ]);

        $this->reset(['name', 'email', 'password']);

        session()->flash('message', 'Registration successful!');

        $this->redirectRoute('login');
        
    }

    #[Title('Register')]   
    public function render()
    {
        return view('livewire.auth.register')->layout('components.layouts.landing')->title('Register');
    }
}
