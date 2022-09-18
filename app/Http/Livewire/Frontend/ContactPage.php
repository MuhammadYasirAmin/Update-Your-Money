<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class ContactPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.contact-page')->layout('layouts.main');
    }
}