<?php

$content = "main.php";

if (isset($_GET["p"])) {
    switch ($_GET["p"]) {
        case 'main':
            $content = "main.php";
            break;
        case 'haboru':
            $content = "haboru.php";
            break;
        case 'elovilag':
            $content = "elovilag.php";
            break;
        case 'viz':
            $content = "viz.php";
            break;
        case 'terkep':
            $content = "terkep.php";
            break;
        case 'film':
            $content = "film.php";
            break;
        case 'energiavalsag':
            $content = "energiavalsag.php";
            break;
        default:
            $content = "main.php";
            break;
    }
}

?>