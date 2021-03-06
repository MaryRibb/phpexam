

<!doctype html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
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
    <button type="button" class="btn btn-secondary"><a href="resultSession.php">Посмотреть результаты</a></button>
    </span>
    <span class="navbar-text">
    <button type="button" class="btn btn-danger"> <a href="exit.php">Выход</a></button>
   
    </span>

</nav>



<table class="table table-inverse">
<thead class="thead-default">
    <tr>
        <th scope="col">Id сессии</th>
        <th scope="col">Ссылка</th>
        
        <th scope="col">Закрыть</th>
        <th scope="col">Удалить</th>
    </tr>
    </thead>
    <?php
$connect = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
// function for getting data from database


function get_sessions_data($connect)
{
    $get_data = mysqli_query($connect, "SELECT * FROM `sessions`");
    if (mysqli_num_rows($get_data) > 0 ) {
        while ($row = mysqli_fetch_assoc($get_data)) {
            if($row['status'] =='Открыта'){

            

            echo '
               <tbody>
                <tr>
                    <th scope="row">' . $row['id'] . '</th>
                    <td><a href="' . $row['link'] . '">' . $row['link'] . '</a></td>
                   
                    <td>
                        
                        <a href="closeSession.php?session_id=' . $row['id'] . '" type="button" class="btn btn-link">Закрыть</a>
                      
                    </td>
                    <td>
                        
                       
                        <a href="deleteS.php?session_id=' . $row['id'] . '" type="button" class="btn btn-link">Удалить</a>
                    </td>
                </tr>
                </tbody>
                ';
            }
            else{
                echo '
                <tbody>
                 <tr>
                     <th scope="row">' . $row['id'] . '</th>
                     <td><a  class="disabled" href="' . $row['link'] . '">' . $row['link'] . '</a></td>
                     
                     <td>
                         
                         <a href="closeSession.php?session_id=' . $row['id'] . '" type="button" class="btn btn-link">Закрыть</a>
                         
                     </td>
                     <td>
                         
                       
                         <a href="deleteS.php?session_id=' . $row['id'] . '" type="button" class="btn btn-link">Удалить</a>
                     </td>
                 </tr>
                 </tbody>
                 ';

            }
        }
     
    
       

    
}
}
get_sessions_data($connect);

?>
    
</table>



</body>
</html>