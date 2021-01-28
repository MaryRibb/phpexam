<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Сессия</title>
    <style>
    a.disabled {
    pointer-events: none; /* делаем ссылку некликабельной */
    cursor: default;  /* устанавливаем курсор в виде стрелки */
    color: #999; /* цвет текста для нективной ссылки */
}</style>
</head>
<body class="min-vh-100 d-flex mt-4 ml-4 mr-4 flex-column">
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1"><?echo('Добро пожаловать,'.$_COOKIE['username'].'-'.$_COOKIE['userlog'].'.')?></span>

  <span class="navbar-text">
    <button type="button" class="btn btn-secondary"><a href="createSession.php">Создать сессию</a></button>
    </span>
    <span class="navbar-text">
    <button type="button" class="btn btn-secondary"><a href="manager.php">Ссылки</a></button>
    </span>
    
    <span class="navbar-text">
    <button type="button" class="btn btn-danger"> <a href="exit.php">Выход</a></button>
   
    </span>

</nav>



<table class="table">
    <thead>
    <tr>
        <th scope="col">Id </th>
        <th scope="col">Id сессии</th>
        <th scope="col">Первый вопрос</th>
        <th scope="col">Второй вопрос</th>
        <th scope="col">Третий вопрос</th>
        <th scope="col">Четвёртый вопрос</th>
        <th scope="col">Пятый вопрос</th>
        <th scope="col">Шестой вопрос</th>
        <th scope="col">Балл за пятый</th>
        <th scope="col">Балл за шестой</th>
    </tr>
    </thead>
    <?php
$connect = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
// function for getting data from database


function sessions($connect)
{
    $get_data = mysqli_query($connect, "SELECT * FROM `otvet`");
    if (mysqli_num_rows($get_data) > 0 ) {
        while ($row = mysqli_fetch_assoc($get_data)) {

            echo '
               <tbody>
                <tr>
                    <th scope="row">' . $row['id'] . '</th>
                    <td>' . $row['session_id'] . '</td>
                    <td>' . $row['first_otvet'] . '</td>
                    <td>' . $row['second_otvet'] . '</td>
                    <td>' . $row['third_otvet'] . '</td>
                    <td>' . $row['fourth_otvet'] . '</td>
                    <td>' . $row['five_otvet'] . '</td>
                    <td>' . $row['six_otvet'] . '</td>
                    <td>' . $row['first_score_rb'] . '</td>
                    <td>' . $row['first_score_ck'] . '</td>
                   
                </tr>
                </tbody>
                ';
            }
            
        }
        
     
    
       

    

}
sessions($connect);

?>
    
</table>
<?php
 $count=0;
 $sumf=0;
 $sums=0;
$connect = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
$get_data = mysqli_query($connect, "SELECT * FROM `otvet`");
    if (mysqli_num_rows($get_data) > 0 ) {
        while ($row = mysqli_fetch_assoc($get_data)) {
            $count=$count+1;
            $sumf=$sumf+$row['first_score_rb'];
            $sums=$sums+$row['first_score_ck'];
        }
             $sred=( $sumf)/$count;
             $srek=( $sums)/$count;
             $sreds=( $sums+$sumf)/$count;
            echo '
               
               
                <h6>Cредний бал за пятый вопрос:'.$sred.'</h6>
                <h6>Cредний бал за шестой вопрос:'.$srek.'</h6>
                <h6>Cредний бал в целом:'.$sreds.'</h6>

                   
                
                ';
           }
            
?>





</body>
</html>