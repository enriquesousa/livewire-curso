<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FullPage extends Component
{
    public function render()
    {
        // forma antigua con @yield('content')
        // return view('livewire.full-page')->extends('layouts.theme')->section('content');

        // utilizando el $slot
        return view('livewire.full-page')->layout('layouts.theme');
    }
}
