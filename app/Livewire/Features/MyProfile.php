<?php

namespace App\Livewire\Features;

use Livewire\Attributes\Layout;
use Livewire\Component;

class MyProfile extends Component
{
    #[Layout('layout.app')]

    public function render()
    {
        return view('livewire.features.my-profile');
    }
}
