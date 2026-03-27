<?php

namespace App\Livewire\Notification;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class IndexPage extends Component
{
    public function render()
    {
        return view('livewire.notification.index-page');
    }
}
