<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * @var  "primary"| "secondary"| "primary-outline"| "secondary-outline"| "accent"| "accent-outline";
     */
    public $variant;
    /**
     * @var "small" | "medium" | "large" | "fullwidth"
     */
    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($variant, $size)
    {
        $this->variant = $variant;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
