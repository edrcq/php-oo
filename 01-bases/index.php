<?php
// Appel du fichier contenant la classe
require_once "MaPremiereClass.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classe MaPremiereClass</title>
</head>
<body>
<h1>Classe MaPremiereClass</h1>
<p>On crée une classe avec le mot clef class</p>
<h3>Instanciation de notre classe</h3>
<p>On utilise le mot clef new suivi du nom de la classe que l'on met dans une variable (! les variables ne sont pas réellement des objets, mais des pointeurs (des liens) vers la classe)</p>
<?php
// première instanciation
$a = new MaPremiereClass();
// deuxième instanciation
$b = new MaPremiereClass();
// ! ceci ne crée pas un nouvel objet, il crée un lien vers la même instance nommée $c, si on modifie $c ou $a, on modifie le même objet! Donc c'est une copie du lien mais ce n'est pas un clone
$c=$a;
var_dump($a,$b,$c);
?>
<h3>Les attributs publics sont lisibles et modifiables sans conditions depuis n'importe où dans notre programme</h3>
<p>Pour afficher la valeur de l'attribut $valeur1 de $a: echo $a->valeur1</p>
<?php
echo $a->valeur1;
?>
<p>Pour modifier la valeur de l'attribut $valeur2 de $c: $c->valeur2="Hello World";</p>
<?php
$c->valeur2="Hello World";
?>
<p>Pour l'afficher : echo $c->valeur2;</p>
<?php
echo $c->valeur2;
echo '<br>Vaut aussi pour $a->valeur2<br>';
echo $a->valeur2;
var_dump($a,$b,$c);

?>
<h3>Les constantes de classe sont écrites en UPPER_CASE avec le mot clef const</h3>
<p>Elle sont toujours publiques et invariables</p>
<p>On peut les appeler depuis une instance de classe (mauvaise pratique) grâce aux :: - echo $a::CONSTANTE_UNE;</p>
<?php
echo $a::CONSTANTE_UNE;
?>
<p>La bonne pratique est de l'appeler depuis la classe et non une de ses instances - echo MaPremiereClass::CONSTANTE_UNE;</p>
<?php
echo MaPremiereClass::CONSTANTE_UNE;
?>
<h3>Les méthodes: ce sont des fonctions/actions se trouvant dans la classe</h3>
<code>public function AfficheValeur1() {
    echo $this->valeur1;
    }</code>
<p> Méthode d'affichage
    <?php
   $a->AfficheValeur1();

    ?>
</p>
<h3>Les méthodes: modification d'un attribut</h3>
<code>public function setValeur1(int $param1){
    $this->valeur1 = $param1;
    }</code>
<p>
    <?php
    $a->setValeur1(188.35);
    $a->AfficheValeur1();

    ?>
</p>
</body>
</html>
