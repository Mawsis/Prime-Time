<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Filter extends Component
{
    use WithPagination;
    public $gender ='all';
    public $trending ='all';
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
                'as' => 'q'
            ],
            'trending'=> [
                'as'=> 't'
            ],
        ];
    }
    public function applyFilter()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.filter',[
            'products'=>Product::filter(["gender"=>$this->gender,"priceMin"=>$this->priceMin,"priceMax"=>$this->priceMax,"search"=>$this->search,"trending"=>$this->trending])->simplePaginate(6)->withQueryString()
        ]);
    }
}
