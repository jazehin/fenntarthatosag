<?php

$path = "pages/";
$content = $path . "main.php";

if (isset($_GET["p"])) {
    switch ($_GET["p"]) {
        case 'main':
            $content = $path .  "main.php";
            break;
        case 'haboru':
            $content = $path .  "haboru.php";
            break;
        case 'elovilag':
            $content = $path .  "elovilag.php";
            break;
        case 'viz':
            $content = $path .  "viz.php";
            break;
        case 'terkep':
            $content = $path .  "terkep.php";
            break;
        case 'film':
            $content = $path .  "film.php";
            break;
        case 'energiavalsag':
            $content = $path .  "energiavalsag.php";
            break;
        default:
            $content = $path .  "main.php";
            break;
    }
}

?>