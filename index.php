<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="css/style.css">
</head>
<body>



<div class="container mt-4">

<?php 
   
    if($_COOKIE['userlog'] == 'user' ):
        include"User.php";
        
?>
<p>юзер</p>


<?php elseif($_COOKIE['userlog'] == 'admin' ): 
 
    include"manager.php";
    ?>
<p>Admin</p>


<?php else: ?>



<div class="col">
<h1>Форма авторизации</h1>
<form action="auth.php" method="post">
<select type="text" class="form-control" name="login" 
id="login">
<option disabled>Выберите пользователя</option>
  <option value="admin">Admin</option>
 
</select><br>

<input type="password" class="form-control" name="pass" 
id="pass" placeholder="Введите пароль"><br>
<button class="btn btn-success" type="submit">Авторизоваться</button>
</form>
</div>
  
    
    




</div>
</div>
<?php endif; ?>

    
</body>
</html>
