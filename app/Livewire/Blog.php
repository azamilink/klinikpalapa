<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Layout('layouts.user')]
#[Title('Blog')]

class Blog extends Component
{
    public function render()
    {
        return view('livewire.pages.blog');
    }
}