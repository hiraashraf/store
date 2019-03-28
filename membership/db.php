<?php
$dbhost= 'cis282store.cpq8rjhs5vgv.us-east-1.rds.amazonaws.com';
$dbuser='ashrafstore';
$dbpass = 'Navhy7864' ;
$dbname = 'cis282store';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($mysqli->error);

