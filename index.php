<!DOCTYPE html>
<html>
<head>
    <title>Форма</title>
</head>
<body>
<form>


    <h1>Виберіть тип елемента форми:</h1>
    <form id="element-selection">
        Вибір варіантів <select name="elementType">
            <option value="text">Текстове поле</option>
            ?>
            <option value="button">Кнопка</option>
            <option value="select">Вибірковий список</option>
        </select>
        <button type="submit">Створити</button>
        <div id="form-container"></div>
        <?php

        require 'ElementForm.php';
        require 'Text.php';
        require 'Button.php';
        require 'Select.php';
        require 'Generator.php';

        use MyForm\ElementForm\ElementForm;
        use MyForm\ElementForm\Text;
        use MyForm\ElementForm\Button;
        use MyForm\ElementForm\Select;
        use MyForm\Generator;

        $formGenerator = new Generator();

        $text = new Text('Ім\'я користувача');
        $button = new Button('Відправити');
        $select = new Select('list', ['Елемент 1', 'Елемент 2', 'Елемент 3']);

        $formGenerator->addElement($text);
        $formGenerator->addElement($button);
        $formGenerator->addElement($select);

        $formGenerator->generateForm();

        ?>
    </form>





</body>
</html>
