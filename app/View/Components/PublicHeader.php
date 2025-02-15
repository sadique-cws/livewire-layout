<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PublicHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public string $myname;

    public function __construct(public string $name)
    {

        $this->myname = $name;

    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.public-header');
    }
}
