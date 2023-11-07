<?php
class Select extends ElementForm
{
    private $options;

    public function __construct($name, $options)
    {
        parent::__construct($name);
        $this->options = $options;
    }

    public function render()
    {
        $html = "<select name='{$this->name}'>";
        foreach ($this->options as $option) {
            $html .= "<option value='$option'>$option</option>";
        }
        $html .= "</select>" . PHP_EOL;
        return $html;
    }



}