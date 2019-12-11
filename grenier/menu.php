 <?php
 /*
if (!function_exists('nav_item')){
    
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
}*/
?>


<?= nav_item("/index.php", "Accueil", $class); ?>
<?= nav_item("pages/cv.php", "C.V.", $class); ?>
<?= nav_item("pages/contact.php", "Contact", $class); ?>