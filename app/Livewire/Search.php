<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Search extends Component
{
    public $query = '';

    public $results = [];
    public $localities = [];

    public function search()
    {
        $results = Service::active()->search($this->query)->take(5)->get();
        $this->results = $results;
    }

    public function render()
    {
        return view('livewire.search');
    }
}
