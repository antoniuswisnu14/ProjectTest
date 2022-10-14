<?php
$username=$_POST['username'];
$password=$_POST['password'];

define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "");
define("DBNAME", "cungcurang");

$link = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
if ($link->connect_error) {
    die("err:db_access");
}

if($result = $link->query("SELECT * FROM users WHERE username='$username' AND password='$password'")) {
    $count = $result->num_rows;
    $result->free_result();
    if($count==1){
      echo "true";
    } else {
      echo "false";
    }
}
$link->close();
?>