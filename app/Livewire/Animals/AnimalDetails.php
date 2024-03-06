<?php

namespace App\Livewire\Animals;

use Livewire\Component;
use Livewire\Attributes\On;

class AnimalDetails extends Component
{ 
    #[On('view-animal-details')] 
    public function render()
    {
        return view('livewire.animals.animal-details');
    }


}
