<!DOCTYPE html>
<html>
<head>
    <title>Форма</title>
</head>
<body>
<?php
require 'ElementForm.php';
include 'Select.php';
include 'Button.php';
include 'Text.php';
include 'Generator.php';

$formGenerator = new Generator();

$text = new Text('text');
$button = new Button('button');
$select = new Select('list', ['Option 1', 'Option 2', 'Option 3']);

$formGenerator->addElement($text);
$formGenerator->addElement($button);
$formGenerator->addElement($select);

$formGenerator->generateForm();
?>
</body>
</html>
