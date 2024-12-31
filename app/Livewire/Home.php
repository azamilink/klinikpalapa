<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Klinik Palapa')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }
}