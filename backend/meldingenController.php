<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$type = $_POST['type_'];
$capaciteit = $_POST['capaciteit']; 
$melder = $_POST['melder'];
$overigemelder = $_POST['overigemelder'];

//1. Verbinding
require_once 'conn.php';

//2. Query
$query="INSERT INTO meldingen(attractie,type_,capaciteit,overigemelder) VALUES(:attractie,:type_,:capaciteit,:melder,:overigemelder)";
//3. Prepare
$statement=$conn->prepare($query);
//4. Execute
$statement->execute
([
    ":attractie" => $attractie,
    ":type_" => $type_,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
    ":overigemelder" => $overigemelder

]);

header("Location:../meldingen/index.php?msg=Meldingopgeslagen");