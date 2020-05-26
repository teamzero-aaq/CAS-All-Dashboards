<?php

$conn=mysqli_connect('localhost','root','root','cas_db');

if(!$conn){
	die("Couldnot connect to server");
}