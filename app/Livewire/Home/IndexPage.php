<?php

namespace App\Livewire\Home;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.guest')]
class IndexPage extends Component
{
    public function render()
    {
        return view('livewire.home.index-page');
    }
}