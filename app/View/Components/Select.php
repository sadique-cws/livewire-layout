<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    /**
     * Create a new component instance.
     */
    public array  $data;

    public function __construct()
    {
        $this->data = ["task1","task2"];

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
    <div>
        <select class='w-full border px-3 py-2 rounded'>
                <option>select option</option>

        </select>
    </div>
blade;
    }
}
