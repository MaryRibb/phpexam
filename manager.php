

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sessions</title>
</head>
<body class="min-vh-100 d-flex mt-4 ml-4 mr-4 flex-column">
<nav class="navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1"><?echo('Добро пожаловать,'.$_COOKIE['username'].'-'.$_COOKIE['userlog'].'.')?></span>

  <span class="navbar-text">
    <button type="button" class="btn btn-secondary"><a href="createSession.php">Создать сессию</a></button>
    </span>
    <span class="navbar-text">
    <button type="button" class="btn btn-danger"> <a href="exit.php">Выход</a></button>
   
    </span>

</nav>



<table class="table">
    <thead>
    <tr>
        <th scope="col">Id сессии</th>
        <th scope="col">Ссылка</th>
        <th scope="col">Закрыто/Открыто</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <?php
$connect = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
// function for getting data from database
function get_sessions_data($connect)
{
    $get_data = mysqli_query($connect, "SELECT * FROM `sessions`");
    if (mysqli_num_rows($get_data) > 0) {
        while ($row = mysqli_fetch_assoc($get_data)) {

            echo '
               <tbody>
                <tr>
                    <th scope="row">' . $row['id'] . '</th>
                    <td><a href="' . $row['link'] . '">' . $row['link'] . '</a></td>
                    <td>' . $row['status'] . '</td>
                    <td>
                        
                        <a href="archiveSession.php?session_id=' . $row['id'] . '" type="button" class="btn btn-warning">Закрыть</a>
                        <a href="deleteS.php?session_id=' . $row['id'] . '" type="button" class="btn btn-danger">Удалить</a>
                    </td>
                </tr>
                </tbody>
                ';
        }
    } 
}
get_sessions_data($connect);

?>
    
</table>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>