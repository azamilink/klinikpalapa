<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component

{
    public $navbar = [
        [
            'name' => 'Home',
            'url' => '/',
            'route' => 'home'
        ],
        [
            'name' => 'About Us',
            'url' => '/about',
            'route' => 'about'
        ],
        [
            'name' => 'Contact Us',
            'url' => '/contact',
            'route' => 'contact'
        ],
        [
            'name' => 'Our Dentist',
            'url' => '/dentist',
            'route' => 'dentist'
        ],
        [
            'name' => 'Blog',
            'url' => '/blog',
            'route' => 'blog'
        ],
        [
            'name' => 'Insurance',
            'url' => '/insurance',
            'route' => 'insurance'
        ],
    ];

    public function render()
    {
        return view('livewire.header');
    }
}