<?php

namespace App\Livewire\Profile;

use App\Enums\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Setting extends Component
{
    public function render()
    {
        return view('livewire.profile.setting');
    }
}
