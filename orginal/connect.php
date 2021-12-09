<?php
function getconnection(){

    $hostname='localhost';
    $username='root';
    $dbname='student';
    $password='';

    $conn=new mysqli($hostname,$username,$password,$dbname);
    if($conn->connect_error)die($conn->connect_error);
    return $conn;
}
?>