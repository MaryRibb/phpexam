<?php
    $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    

    $mysql = new mysqli('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
    $mysql->query("INSERT INTO users (login,pass,name) VALUES ('$login','$pass','$name')");
   
   
    $mysql->close();
    
    header ('Location: index.php'); 
    
     exit();

?>


