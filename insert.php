<?php

$user_name = "root";
$password = "";
$database = "INFORMATION";
$server = "localhost";

mysql_connect("$server","$user_name","$password");

mysql_select_db("$database");

if (isset($_POST['SubmitButton']))
{
        $sid = mysql_real_escape_string($_POST['sid']);
        $fname = mysql_real_escape_string($_POST['fname']);
        $lname = mysql_real_escape_string($_POST['lname']);
        $selectvalue = mysql_real_escape_string($_POST['selectvalue']);
        $selected = mysql_real_escape_string($_POST['selected']);
        $comment= mysql_real_escape_string($_POST['comment']);



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
}
else
{
        echo("<br> Invalid response")
}
?>
