<?php
$conn = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');

if(isset($_GET['session_id'])){

    $session_id = $_GET['session_id'];
    // UPDATE USER DATA
    $update_query = mysqli_query($conn,"UPDATE `sessions` SET status='Закрыто' WHERE id='$session_id'");

    //CHECK DATA UPDATED OR NOT
    if($update_query){
        header("Location: manager.php");
        exit;
    }

}
?>