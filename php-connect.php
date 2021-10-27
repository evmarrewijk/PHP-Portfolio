<?php
/**
 * Created by PhpStorm.
 * User: Eduardo
 * Date: 30-1-2019
 * Time: 15:10
 */
$servername = "localhost";
$dbname = "project";
$username = "root";
$password = "";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo " Connectie gelukt <br>";
}
catch(PDOException $e)
{
    echo "Connectie mislukt: ".$e->getMessage();
}