<?php

namespace App\Livewire\Products;

use Livewire\Component;

class ProductsByCategory extends Component
{
    public function render()
    {
        return view('livewire.products.products-by-category');
    }
    
    #[\Livewire\Attributes\On('view-all-products')] 
    public function loadProducts() {
        dd('test123');
    }
}
