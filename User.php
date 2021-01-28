

<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1"><p><? echo"Привет ".$_COOKIE['userlog']."-".$_COOKIE['username'];?>.Выход<a href='exit.php'>тут</a></p></span>
</nav>

<div class="container mt-4">

<div class="row">
<div class="col">
<h1>Заполните поля</h1>
<form action="usercheck.php" method="post">

<select type="text" class="form-control" name="variant" 
id="variant">
<option disabled>Выберите значение</option>
  <option value="one">1</option>
  <option value="two">2</option>
  <option value="thre">3</option>
</select><br>

<input type="text" class="form-control" name="fryct" 
id="fruct" placeholder="Введите фрукт"><br>

<input type="password" class="form-control" name="ovosh" 
id="ovosh" placeholder="Введите овощь"><br>

    <input type="radio" id="contactChoice1"
     name="contact" value="email">
    <label for="contactChoice1">Email</label><br>

    <input type="radio" id="contactChoice2"
     name="contact" value="phone">
    <label for="contactChoice2">Phone</label><br>

    <input type="radio" id="contactChoice3"
     name="contact" value="mail">
    <label for="contactChoice3">Mail</label><br>

<button class="btn btn-success" type="submit">Отправить</button><br>
</form>
</div>
   

</div>
</div>

