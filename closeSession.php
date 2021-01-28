<?php
$connect = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');

if(isset($_GET['session_id'])){

    $session_id = $_GET['session_id'];

    $update_query = mysqli_query($connect,"UPDATE `sessions` SET status='Закрыто' WHERE id='$session_id'");

   
    if($update_query){
        header("Location: manager.php");
        exit;
    }

}
?>