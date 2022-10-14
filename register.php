<?php
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "cungcurang");
    
    $username=$_POST['username'];
    $password=$_POST['password'];

    $link = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    if ($link->connect_error) {
        die("err:db_access");
    }
    
    if($result = $link->query("INSERT INTO users (username, password) VALUES ('$username', '$password')")) {
        header('location:../');
    }

    $link->close();
?>