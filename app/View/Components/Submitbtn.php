<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Submitbtn extends Component
{
    public $action;

    public $value;

    public $css;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action = "reza", $value = "ارسال", $css = "")
    {
        $this->action = $action;

        $this->value = $value;

        $this->css = $css;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.submitbtn');
    }
}
