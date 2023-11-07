<?php
class Generator
{
    private $elements = [];

    public function addElement(ElementForm $element)
    {
        $this->elements[] = $element;
    }

    public function generateForm()
    {
        $html = "<form>";
        foreach ($this->elements as $element) {
            $html .= $element->render();
        }
        $html .= "</form>";
        echo $html;
    }
}
