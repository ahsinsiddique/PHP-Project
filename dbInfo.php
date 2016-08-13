<?php
$dbPassword="asdf123";
$dbUserName="php_project";
$dbServer="localhost";
$dbName="php_project";

$connection=new mysqli($dbServer,$dbUserName,$dbPassword,$dbName);
if($connection->connect_errno)
{
    exit("Database has encoutered an error:".$connection->connect_error);
}


?>