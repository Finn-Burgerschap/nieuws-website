<?php

namespace App\Livewire;

use App\Models\News;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Home extends Component
{
    public Collection $news;

    public function mount(): void
    {
        $this->news = News::all();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
