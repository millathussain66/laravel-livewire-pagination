<?php

namespace App\Http\Livewire;

use App\Models\Product as ModelsProduct;
use Livewire\Component;
use Livewire\WithPagination;


class Product extends Component
{




    use WithPagination;
    public function render()
    {
         $data =  ModelsProduct::paginate(5);
        return view('livewire.product',[
            'value' => $data,
        ])->layout('layouts.base');
    }
}
