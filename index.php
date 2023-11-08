<!DOCTYPE html>
<html>
<head>
    <title>Форма</title>
</head>
<body>
<form>
    <?php

    require 'ElementForm.php';
    require 'Text.php';
    require 'Button.php';
    require 'Select.php';
    require 'Generator.php';
    use MyForm\Generator;
    $formGenerator = new Generator();

    $text = new Text('text');
    $button = new Button('button');
    $select = new Select('list', ['Option 1', 'Option 2', 'Option 3']);

    $formGenerator->addElement($text);
    $formGenerator->addElement($button);
    $formGenerator->addElement($select);

    $formGenerator->generateForm();

    ?>
</form>
</body>
</html>

