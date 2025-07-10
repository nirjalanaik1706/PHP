<?php

if(isset($_POST['Register']))
{

    $conn=new mysqli("localhost","root",'',"Airport2");


if($conn->connect_error) die($conn->connect_error);


$pn=$_POST['pn'];
$passno=$_POST['passno'];
$na=$_POST['na'];
$ed=$_POST['ed'];
$id=$_POST['id'];
$em=$_POST['em'];
$phone=$_POST['phone'];
$addr=$_POST['addr'];
$ct=$_POST['ct'];
$st=$_POST['st'];




$q="INSERT INTO `airport2`(`Passenger Name`, `Passport No`, `Nationality`, `Expiry Date`, `Issue Date`, `Email`, `Phone Number`, `Address`, `City`, `State`) VALUES ('[$pn]','[$passno]','[$na]','[$ed]','[$id]','[$em]','[$phone]','[$addr]','[$ct]','[$st]')";

$result=$conn->query($q);

if(!$result)
{
    die("database access failed:".$conn->error);

}
else
{
    echo("data inserted");
}
}