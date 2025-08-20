<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginSiswaForm extends Component
{
    public $email;
    public $password;
    public $remember = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password, 'role' => 'siswa'], $this->remember)) {
            session()->regenerate();
            return redirect()->intended(route('dashboard.siswa'));
        }

        $this->addError('email', 'Email atau password salah atau bukan akun siswa.');
    }

    public function render()
    {
        return view('livewire.auth.login-siswa-form');
    }
}
