<?php
// ici les fonctions php du site

function nav_item(string $lien, string $titre, string $linkClasse = ""): string {
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien){
        $classe = $classe . ' active';
    } 
    return <<<HTML
    <li class="$classe">
        <a class="$linkClasse" href=" $lien">$titre</a>
    </li>
HTML;
}

function nav_menu(string $linkClass = ""): string {
    return 
        nav_item("/index.php", "Accueil", $linkClass) .
        nav_item("/templates/pages/cv.php", "C.V.", $linkClass) .
        nav_item("/templates/pages/contact.php", "Contact", $linkClass);

}

function checkbox(string $name, string $value, array $data):string {
    $attributes = "";
    if (isset($data[$name]) && in_array($value, $data[$name])){
        $attributes .= "checked";
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;
}

function radio(string $name, string $value, array $data):string {
    $attributes = "";
    if (isset($data[$name]) && $value === $data[$name]){
        $attributes .= "checked";
    }
    return <<<HTML
    <input type="radio" name="{$name}" value="$value" $attributes>
HTML;
}

function dump($var){
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

?>