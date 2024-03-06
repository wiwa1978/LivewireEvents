<?php

namespace App\Livewire\Animals;

use App\Models\Animal;
use Livewire\Component;
use App\Livewire\Animals\AnimalDetails;

class Animals extends Component
{
    public function render()
    {
        $animals = Animal::paginate(4);
        //dd($animals);
        return view('livewire.animals.animals', compact('animals'));
    }

    public function viewAnimalDetails() {
        $this->dispatch('view-animal-details')->to(AnimalDetails::class); 
    }
}
