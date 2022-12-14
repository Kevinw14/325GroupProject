<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Product;

class ProductComponent extends Component
{

    /**
     * @var Product
     */
    public $product;

    /**
     * @var int
     */
    public $key;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product, $key)
    {
        $this->product = $product;
        $this->key = $key;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-component');
    }
}
