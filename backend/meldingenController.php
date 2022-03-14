<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$type_ = $_POST['type_'];
$capaciteit = $_POST['capaciteit']; 
$melder = $_POST['melder'];
$overigemelder = $_POST['overigemelder'];
$prioriteit = $_POST['prioriteit'];
//Checken of het ingevuld is
$attractie=$_POST['attractie'];
if(empty($attractie))
{
    $errors[]="Vulde attractie-naamin.";
};
if(!is_numeric($capaciteit))
{
    $errors[]="Vul voor capaciteit een geldig getal in.";
};
//1. Verbinding
require_once 'conn.php';

//2. Query
$query="INSERT INTO meldingen(attractie,type_,capaciteit,melder,overigemelder,prioriteit) VALUES(:attractie,:type_,:capaciteit,:melder,:overigemelder,:prioriteit)";
//3. Prepare
$statement=$conn->prepare($query);
//4. Execute
$statement->execute
([
    ":attractie" => $attractie,
    ":type_" => $type_,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
    ":overigemelder" => $overigemelder,
    ":prioriteit" => $prioriteit
]);

header("Location: ../index.php");