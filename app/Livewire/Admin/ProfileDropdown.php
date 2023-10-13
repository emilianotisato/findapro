<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfileDropdown extends Component
{
    public bool $open = false;

    public function toggleOpen()
    {
        $this->open = !$this->open;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.admin.profile-dropdown');
    }
}
