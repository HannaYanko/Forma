<?php

namespace MyForm;

class Generator
{
    private $elements = [];


    public function addElement(Text $element)
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
