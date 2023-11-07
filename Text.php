<?php
require 'ElementForm.php';
class Text extends ElementForm
{

    public function render()
    {
        return "<input type='text' name='{$this->name}'>" . PHP_EOL;
    }
}