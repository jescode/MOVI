<?php
session_start();
include_once 'dbh.inc.php';

$sessionid= $_SESSION['u_id'];

$filename = "../uploads/profile".$sessionid."*";
$fileinfo=glob($filename); //sucht nach namen
$fileext=explode(".",$fileinfo[0]); //profile11
$fileactualext= $fileext[1];

$file = "../uploads/profile".$sessionid.".".$fileactualext;

if(!unlink($file)){ //löscht datei o.a. filename
    echo "File was not deleted!";
} else{
    echo "File was deleted!";
}

$sql="UPDATE users SET picture=1 WHERE user_id='$sessionid';";
mysqli_query($conn, $sql);
header("Location: ../index.php?page=profile&deletesuccess");