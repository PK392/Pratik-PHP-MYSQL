<?php

$user_name = "root";
$password = "Master@1234";
$database = "INFORMATION";
$server = "localhost";

mysql_connect("$server","$user_name","$password");

mysql_select_db("$database");


$order = "INSERT INTO USERS

        (Firstname, Lastname)

        VALUES

        ('$fname',

        '$lname')";


$result = mysql_query($order);

if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data failed");

}
?>
