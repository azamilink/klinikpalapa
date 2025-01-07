<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Klinik Palapa')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.pages.home');
    }
}