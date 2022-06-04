<?php
$host = "localhost";
$user = "root";
$pass = "";

$mysqli = new mysqli($host, $user, $pass);

$ver=mysqli_query($mysqli,"SHOW DATABASES");

while($row=mysqli_fetch_array($ver)){
    echo $row[0]."<br>";
}