<?php
require_once 'functions.php';
// checkbox
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];
// Radio
$cornets = [
    'Pot' => 2,
    'Cornet' => 3
];
// Checkbox
$supplement = [
    'Pépites de chocolat' => 1,
    'Chantilly ' => 0.5
];
$title = "Composez votre glace";
$ingredients = [];
$total = 0;
if(isset($_GET["parfum"])){
    foreach($_GET["parfum"] as $parfum) {
        if(isset($parfums[$parfum])){
            $ingredients[] = $parfum;
            $total += $parfums[$parfum];
            dump($parfums);
            dump($parfums[$parfum]);
        }
    }
    
}
if(isset($_GET["supp"])){
    foreach($_GET["supp"] as $supp) {
        if(isset($supplement[$supp])){
            $ingredients[] = $supp;
            $total += $supplement[$supp];
        }
    }
    
}

if(isset($_GET["cornet"])){
    $cornet = $_GET["cornet"]; 
    if(isset($cornets[$cornet])){
        $ingredients[] = $cornet;
        $total += $cornets[$cornet];
    }
}

require 'header.php';
?>
<h1>Composer votre glace </h1>

<div class="row">
    <div class="col-md-4">
        <h2>Votre glace</h2>
        <ul>
            <?php foreach($ingredients as $ingredient): ?>
                <li><?= $ingredient ?></li>
            <?php endforeach; ?>
        </ul>
        <p>
            <strong>Prix : </strong><?= $total ?> €
        </p>
    </div>
    <div class="col-md-8">
        <form action="/jeu.php"method="GET">
            <h2>Choisissez vos parfums</h2>
            <?php foreach($parfums as $parfum => $prix): ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox("parfum", $parfum, $_GET) ?>
                        <?= $parfum ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach; ?>
            <h2>Choisissez votre cornet</h2>
            <?php foreach($cornets as $cornet => $prix): ?>
                <div class="checkbox">
                    <label>
                        <?= radio("cornet", $cornet, $_GET) ?>
                        <?= $cornet ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach; ?>
            <h2>Choisissez vos suppléments</h2>
            <?php foreach($supplement as $supp => $prix): ?>
                <div class="checkbox">
                    <label>
                        <?= checkbox("supp", $supp, $_GET) ?>
                        <?= $supp ?> - <?= $prix ?> €
                    </label>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary">Composer ma glace</button>
        </form>
    </div>
</div>
<h2>$_GET</h2>
<pre>
<?php var_dump($_GET);?>
</pre>

<h2>$_POST</h2>
<pre>
<?php var_dump($_POST);?>
</pre>


<?php
require 'footer.php';
?>