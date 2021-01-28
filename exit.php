<?php
    setcookie('username',$user['name'],time() - 3600,"/");
    setcookie('userlog',$user['login'],time() - 3600,"/");
    echo('<a href="index.php">Вернуться к авторизации</a>')
?>