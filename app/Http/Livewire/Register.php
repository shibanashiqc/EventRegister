<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $address, $age, $phone, $instagram, $facebook;
    public function render()
    {
        return view('livewire.register');
    }

    public function register(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'address' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
        ]);

        $user = User::create([
            'name' => $this->name,
            'password' => Hash::make('password'),
            'email' => $this->email,
            'address' => $this->address,
            'age' => $this->age,
            'phone' => $this->phone,
            'instagram' => $this->instagram,
            'facebook' => $this->facebook,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Register Success',
            'text' => 'Thank you for registering',
        ]);
    }
}
