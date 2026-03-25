<?php

namespace App\Livewire\Dashboard;

use App\Enums\DocumentStatus;
use App\Models\AuditLog;
use App\Models\Category;
use App\Models\Document;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app')]
class IndexPage extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index-page');
    }
}
