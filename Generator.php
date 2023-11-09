<?php
namespace MyForm;

use MyForm\ElementForm\ElementForm;

class Generator
{
    private $elements = [];

    public function addElement(ElementForm $element)
    {
        $this->elements[] = $element;
    }

    public function generateForm()
    {
        $i = "";
        foreach ($this->elements as $element) {
            $i .= $element->render();
        }
        echo $i;
    }
}




