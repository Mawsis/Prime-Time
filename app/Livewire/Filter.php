<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Filter extends Component
{
    public $priceMax = 15000;
    public $priceMin = 0;
    public $gender ='all';
    public $search = '';
    public function applyFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.filter',[
            'products'=>Product::filter(["gender"=>$this->gender,"priceMin"=>$this->priceMin,"priceMax"=>$this->priceMax,"search"=>$this->search])->get()
        ]);
    }
}
