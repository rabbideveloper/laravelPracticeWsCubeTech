<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $label;
    public $name;
    public $placeholder;
    public $for;
    public $id;
    public $value;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$label,$name,$placeholder,$for,$id,$value)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->for = $for;
        $this->id = $id;
        $this->value = $value;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
