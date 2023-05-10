<?php 
    echo "<h1>Bonjour," . " " . $_GET['fname'] . " " . $_GET["lname"] . " " . "bienvenue sur mon site</h1>";

    $first_name = $_GET['fname'];
    $last_name = $_GET['lname'];

    $donnes = array(
        'first_name' => $first_name,
        'last_name' => $last_name,
    );

    
    echo " votre Nom" . ' '. $donnes['first_name'] . "<br>";
    echo " votre Nom de famille" . ' ' . $donnes['last_name'] . "<br>";
    
    foreach($donnes as $data){
        echo $data;
    }
?>