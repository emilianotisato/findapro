<?php

namespace App\Livewire;

use App\Models\Location;
use App\Models\Service;
use Livewire\Component;

class Search extends Component
{
    public string $query = '';
    public string $locationSearch = '';
    public ?Location $selectedLocation = null;

    public array $results = [];
    public array $locations = [];

    public function getResults()
    {
        $results = Service::query()
            ->active()
            ->when($this->selectedLocation, function ($query) {
                $query->whereHas('locations', function ($query) {
                    $query->where('location_id', $this->selectedLocation->id);
                });
            })
            ->search($this->query)
            ->take(5)
            ->get();
        $this->results = $results;
    }

    public function selectLocation(Location $location)
    {
        $this->selectedLocation = $location;
        $this->locationSearch = '';
        $this->locations = [];
        $this->getResults();
    }

    public function clearLocation()
    {
        $this->selectedLocation = null;
        if($this->query) {
            $this->getResults();        
        }
    }

    /**
     * Listen for location search updates automatically handle by livewire
     *
     * @return void
     */
    public function updatedLocationSearch()
    {
        $locations = Location::search($this->locationSearch)->take(5)->get();
        $this->locations = $locations;
    }

    public function render()
    {
        return view('livewire.search');
    }
}
