# Exo Class Form

FormClass.php

```php
<?php
class Form {

    public function showForm() {

        return "<form action...>";
    }
}
?>
```

index.php de test
```php
require_once "FormClass.php";

$inputs_array = [
    [ 'name' => 'username', 'type' => 'text' ],
    [ 'name' => 'password', 'type' => 'password' ],
];

$form = new Form();
$form->setAction("handle_form.php");
$form->setMethod("post");
$form->setInputs($inputs_array);

$str = $form->showHtml(); // 
echo $str;
```