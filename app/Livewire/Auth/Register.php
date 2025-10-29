<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    #[Layout('layout.auth')]

    public $name;
    public $email;
    public $no_whatsapp;
    public $password;
    public $foto;
    public $alamat;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'no_whatsapp' => 'required',
            'password' => 'required',
            'alamat' => 'required',
        ]);

        // return dd($this);

        $ImagePath = time() . '_'. $this->foto->getClientOriginalName();
        $ImagePath = $this->foto->store('avatar_warga', 'public');

        User::create([
            'name' => $this->name,
            'email' => $this->email,    
            'no_whatsapp' => $this->no_whatsapp,
            'password' => Hash::make($this->password),
            'role' => 'warga',
            'foto' => $ImagePath,
            'alamat' => $this->alamat,
        ]);

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
