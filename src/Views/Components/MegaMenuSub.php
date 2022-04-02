<?php 

namespace Aaron\Storefront\Views\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class MegaMenuSub extends Component
{
    public Collection $items;
    public $first;

    public function __construct(Collection $items, $first = null)
    {
        $this->items = $items;
        $this->first = $first;
    }

    public function render()
    {
        return view('storefront::components.mega-menu-sub');
    }
}