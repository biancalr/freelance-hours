<?php

namespace App\Livewire\Project;

use App\Models\Project;
use Livewire\Component;

class Timer extends Component
{
    public Project $project;
    public function timer() {
        
    }
    public function render()
    {
        return view('livewire.project.timer');
    }
}
