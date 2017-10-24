<?php
 
 
function Connect()
{
 $dbhost = "hostname";
 $dbuser = "db_usernmae";
 $dbpass = "db_password";
 $dbname = "databse_name";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}
 
?>
