<?php
$conn = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');

$session_id = $_GET['session_id'];

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Форма</title>
</head>
<body >
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1"><?echo('Добро пожаловать,'.$_COOKIE['username'].'-'.$_COOKIE['userlog'].'.')?></span>

  
    <span class="navbar-text">
    <button type="button" class="btn btn-danger"> <a href="exit.php">Выход</a></button>
   
    </span>

</nav>

<div class="container">
    <form action="ResTest.php" method="post">
        <?php
        
        $get_data = mysqli_query($conn, "SELECT question FROM `first_type` WHERE session_id = '$session_id'");
        if (mysqli_num_rows($get_data) > 0) {
            while ($first_type = mysqli_fetch_assoc($get_data)) {

                echo '
               
                <div class="form-group">
                    <label for="first_type">' . $first_type['question'] . '</label>
                    <input type="number" class="form-control" id="first_type" placeholder="Answer" name="first_otvet">
                </div>
               
                ';
            }
        } 
        ?>

        <?php
        $get_data = mysqli_query($conn, "SELECT question FROM `second_type` WHERE session_id = '$session_id'");
        if (mysqli_num_rows($get_data) > 0) {
            while ($second_type = mysqli_fetch_assoc($get_data)) {

                echo '
               
                <div class="form-group">
                    <label for="first_type">' . $second_type['question'] . '</label>
                    <input type="number" min="0" class="form-control" id="first_type" placeholder="Answer" name="second_otvet">
                </div>
               
                ';
            }
        } 
        ?>

        <?php
        $get_data = mysqli_query($conn, "SELECT question FROM `third_type` WHERE session_id = '$session_id'");
        if (mysqli_num_rows($get_data) > 0) {
            while ($third_type = mysqli_fetch_assoc($get_data)) {

                echo '
               
                <div class="form-group">
                    <label for="first_type">' . $third_type['question'] . '</label>
                    <input type="text" maxlength="30" class="form-control" id="first_type" placeholder="Answer" name="third_otvet">
                </div>
               
                ';
            }
        } 
        ?>

        <?php
        $get_data = mysqli_query($conn, "SELECT question FROM `fourth_type` WHERE session_id = '$session_id'");
        if (mysqli_num_rows($get_data) > 0) {
            while ($fourth_type = mysqli_fetch_assoc($get_data)) {

                echo '
               
                <div class="form-group">
                    <label for="first_type">' . $fourth_type['question'] . '</label>
                    <textarea maxlength="255" type="text" class="form-control" id="first_type" placeholder="Answer" name="fourth_otvet"></textarea>
                </div>
               
                ';
            }
        } 
        ?>
        <?php
        $get_data = mysqli_query($conn, "SELECT * FROM `five_type` WHERE session_id = '$session_id'");
        if (mysqli_num_rows($get_data) > 0) {
            while ($five_type = mysqli_fetch_assoc($get_data)) {

                echo '
               
                <div class="form-group">
                    <label for="first_type">' . $five_type['question'] . '</label>
<br>
                    <label class="btn btn-primary">
                    <input type="hidden" name="first_score_rbb" value="' . $five_type['first_score_rb'] . '">
    <input type="radio" name="options" id="option2" autocomplete="off" name="five_otvet"> ' . $five_type['first_rb'] .'
  </label>
  <br>
  <label class="btn btn-primary">
  <input type="hidden" name="first_score_rbb" value="' . $five_type['second_csore_rb'] . '">
    <input type="radio" name="options" id="option3" autocomplete="off" name="five_otvet">'. $five_type['second_rb'] .'
  </label>
  <br>

                  
        
               
                ';
            }
        } 
        ?>
        <?php
        $get_data = mysqli_query($conn, "SELECT * FROM `six_type` WHERE session_id = '$session_id'");
        if (mysqli_num_rows($get_data) > 0) {
            while ($six_type = mysqli_fetch_assoc($get_data)) {

                echo '
               
                <div class="form-group">
                    <label for="first_type">' . $six_type['question'] . '</label>
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"  name="six_otvet">
                    <input type="hidden" name="first_score_ckk" value="' . $six_type['first_score_ck'] . '">
                    <label class="form-check-label" for="flexCheckDefault">
                   ' . $six_type['first_check'] .'
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked  name="six_otvet">
                    <input type="hidden" name="second_score_ckk" value="' . $six_type['second_score_ck'] . '">
                    <label class="form-check-label" for="flexCheckChecked">
                      
                    '. $six_type['second_check'] .'
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked  name="six_otvet">
                    <input type="hidden" name="third_score_ckk" value="' . $six_type['third_score_ck'] . '">
                    <label class="form-check-label" for="flexCheckChecked">
                      
                    '. $six_type['third_check'] .'
                    </label>
                  </div>
                    
                </div>
               
                ';
            }
        } 
        ?>


<br>
        <button type="submit" class="btn btn-primary mt-3">Отправить</button>
    </form>
</div>