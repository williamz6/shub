<?php
session_start();
$dbserver= 'localhost';
$dbuser= 'root';
$dbpass= '';
$dbname= 'phpcrud';

$dblink= mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);