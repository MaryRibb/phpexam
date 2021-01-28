<?php
$connect = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
if(isset($_GET['session_id'])){

    $session_id = $_GET['session_id'];
    $delete_session = mysqli_query($connect,"DELETE FROM `sessions` WHERE id='$session_id'");
    $delete_sessionf = mysqli_query($connect,"DELETE FROM `first_type` WHERE session_id='$session_id'");
    $delete_sessions = mysqli_query($connect,"DELETE FROM `second_type` WHERE session_id='$session_id'");
    $delete_sessiont = mysqli_query($connect,"DELETE FROM `third_type` WHERE session_id='$session_id'");
    $delete_sessionf = mysqli_query($connect,"DELETE FROM `fourth_type` WHERE session_id='$session_id'");
    $delete_sessionfi = mysqli_query($connect,"DELETE FROM `five_type` WHERE session_id='$session_id'");
    $delete_sessions = mysqli_query($connect,"DELETE FROM `six_type` WHERE session_id='$session_id'");

    if($delete_session){
        header("Location: manager.php");
        exit;
    }
}
?>