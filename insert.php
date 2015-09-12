<?php

$user_name = "";
$password = "Master@1234";
$database = "INFORMATION";
$server = "localhost";

mysql_connect("$server","$user_name","$password");

mysql_select_db("$database");


$order = "INSERT INTO Candidates

        (Student_id,Firstname, Lastname,Skill,Rating,Comment)

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
