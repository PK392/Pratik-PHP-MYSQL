<?php

$user_name = "root";
$password = "";
$database = "INFORMATION";
$server = "localhost";

mysql_connect("$server","$user_name","$password");

mysql_select_db("$database");


$order = "INSERT INTO Candidates

        (Sid,Firstname, Lastname,Skill,Rating,Comment)

        VALUES

        ('$sid','$fname',

        '$lname','$selectvalue','$selected','$comment')";


$result = mysql_query($order);

if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data failed");

}
?>
