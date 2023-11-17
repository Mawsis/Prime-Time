<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class Filter extends Component
{
    
    public $gender ='all';
    public $priceMin = 0;
    public $priceMax = 15000;
    public $search = '';

    protected function queryString(){
        return [
            'gender' => [
                'as' => 'g'
            ],
            'priceMin' => [
                'as' => 'min'
            ],
            'priceMax' => [
                'as' => 'max'
            ],
            'search' => [
                'as' => 's'
            ],
            ];
    }
    public function render()
    {
        return view('livewire.filter',[
            'products'=>Product::filter(["gender"=>$this->gender,"priceMin"=>$this->priceMin,"priceMax"=>$this->priceMax,"search"=>$this->search])->get()
        ]);
    }
}
