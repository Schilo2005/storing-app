<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$type = $_POST["typen"]
$capaciteit = $_POST['capaciteit'];
$melder = $_POST['melder'];

echo $attractie . " / " . $type . " / " . " / " . $capaciteit . " / " . $melder;

//1. Verbinding
require_once '../../../config/conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, capaciteit, melder, type)
VALUES(:attractie, :capaciteit, :melder, :type)";

//3. Prepare
$statement = $conn ->prepare($query);

//4. Execute
require_once 'conn.php';
$query = "INSERT INTO meldingen (attractie, type)
VALUES(:attractie, :type)";
$statement = $conn->prepare($query);

$statement->execute([
    ":attractie" => $attractie,
    ":type" => $type,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
]);
 $items = $statement->fetchAll(PDO::FETCH_ASSOC);

if(isset($_POST['newsletter']))
{
    $newsletter = true;
}
else
{
    $newsletter = false;
}