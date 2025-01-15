<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $navbar = [
        ["name" => "Home", "route" => "home", "url" => "/"],
        ["name" => "About Us", "route" => "about", "url" => "/about"],
        ["name" => "Contact Us", "route" => "contact", "url" => "/contact"],
        ["name" => "Our Dentist", "route" => "dentist", "url" => "/dentist"],
        ["name" => "Blog", "route" => "blog", "url" => "/blog"],
        ["name" => "Insurance", "route" => "insurance", "url" => "/insurance"],
    ];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.header');
    }
}