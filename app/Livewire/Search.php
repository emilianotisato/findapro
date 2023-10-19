<?php

namespace App\Livewire;

use App\Models\Location;
use App\Models\Service;
use Livewire\Component;

class Search extends Component
{
    public $query = '';
    public $locationSearch = '';

    public $results = [];
    public $locations = [];

    public function getResults()
    {
        $results = Service::active()->search($this->query)->take(5)->get();
        $this->results = $results;
    }

    public function getLocations()
    {
        dd('aqui??');
        $locations = Location::search($this->query)->take(5)->get();
        $this->locations = $locations;
    }

    public function render()
    {
        return view('livewire.search');
    }
}
