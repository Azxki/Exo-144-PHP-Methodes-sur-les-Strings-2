<?php
    $texte = "Ajourd'hui il fait -1000 degrés";
    echo filter_var($texte, FILTER_SANITIZE_ADD_SLASHES);


    $chaine = "yo les amis !";
    $chaine1 = "yo les amis !";
    $chaine2 = "yo les amis !";
    $chaine = ucfirst($chaine);
    echo $chaine;
    $chaine1 = strtoupper($chaine1);
    echo $chaine1;
    $chaine2 = ucwords($chaine2);
    echo $chaine2;

    $yo = "yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo yo";
    $yo1 = str_word_count($yo);
    echo $yo1;

    $bjr = "exercice numéro 6";
    $bjr = str_shuffle($bjr);
    echo $bjr;

    $bjr30 = "Hello, nous apprenons PHP";
    echo $bjr30;


    function maFonction ($text, $search) {
        $position = strpos($text, $search);
        if ($position === strlen($text) - strlen($search)) {
            echo "la chaine " . $search . "a été trouvée en fin de chaine";
        }
    }
?>