<pre>
<?php 


$a = 21;
$b = 'a';

$copy_a = $a;

echo $$b;

var_dump($$b);

function gen_add_form() {
    return "gen_add_form result";
}

function gen_mult_form() {
    return "gen_mult_form res";
}

if ($a == 21) {
    $funcName = 'gen_add_form';
}
else {
    $funcName = 'gen_mult_form';
}

$resultFunc = $funcName();

var_dump($funcName);
var_dump($resultFunc);
?>
</pre>