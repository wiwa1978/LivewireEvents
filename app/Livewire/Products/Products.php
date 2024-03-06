<?php

namespace App\Livewire\Products;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return view('livewire.products.products');
    }

    public function viewProducts() {
        $this->dispatch('view-all-products')->to(ProductsByCategory::class); 
    }
    
}
