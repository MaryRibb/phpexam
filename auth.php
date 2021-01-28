<?php
    $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    
    $mysql = new mysqli('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
    $result=$mysql->query("SELECT * FROM  users WHERE login='$login' AND pass = '$pass' ");
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('username',$user['name'],time() + 3600,"/");
    setcookie('userlog',$user['login'],time() + 3600,"/");
    
    $mysql->close();
    header ('Location: index.php'); 
    
     exit();
    ?>