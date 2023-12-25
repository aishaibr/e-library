<?php>
$age = $_REQUEST['age'];
$your intersts = $_REQUEST['inter'];
$choose a language = $_REQUEST['languages'];


if(isset($_POST['btn']))
{


$host="localhost";
$user="root";
$db="e-library"

$conn= mysqli_connect($host,$user,$db);

$insert="insert into info values('$age,$your intersts,$languages')";
mysqli_query($conn,$insert);

}