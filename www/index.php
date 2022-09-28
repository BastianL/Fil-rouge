<?php

function direBonjour(): void
{
    echo "<h1>Bonjour</h1>";
}

function DireBonjourAqui($nom)
{
    return "<p>Bonjour $nom</p>";
}

direBonjour();
direBonjour();

direBonjourAqui('Toto');

$nom = 'Mike';

echo "<p> Bonjour $nom";

include 'footer.php';