
<?php
$connect = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
$session_id = $_GET['session_id'];


if(isset($_POST['first_otvet'])) {
    

    $session_id = $_GET['session_id'];
    $first_otvet = mysqli_real_escape_string($connect, htmlspecialchars($_POST['first_otvet']));
    $second_otvet = mysqli_real_escape_string($connect, htmlspecialchars($_POST['second_otvet']));
    $third_otvet = mysqli_real_escape_string($connect, htmlspecialchars($_POST['third_otvet']));
    $fourth_otvet = mysqli_real_escape_string($connect, htmlspecialchars($_POST['fourth_otvet']));
    $five_otvet = mysqli_real_escape_string($connect, htmlspecialchars($_POST['five_otvet']));
    $six_otvet = mysqli_real_escape_string($connect, htmlspecialchars($_POST['six_otvet']));
    $first_score_rb = mysqli_real_escape_string($connect, htmlspecialchars($_POST['first_score_rbb']));
    $second_csore_rb = mysqli_real_escape_string($connect, htmlspecialchars($_POST['second_csore_rbb']));
    $first_score_ck = mysqli_real_escape_string($connect, htmlspecialchars($_POST['first_score_ckk']));
    $second_score_ck = mysqli_real_escape_string($connect, htmlspecialchars($_POST['second_score_ckk']));
    $third_score_ck = mysqli_real_escape_string($connect, htmlspecialchars($_POST['third_score_ckk']));
    $six_otvet = mysqli_query($connect, "INSERT INTO `otvet` (session_id,first_otvet,second_otvet,third_otvet,fourth_otvet,five_otvet,six_otvet,first_score_rb,first_score_ck) 
    VALUES ('$session_id','$first_otvet',' $second_otvet','$third_otvet','$fourth_otvet',' $five_otvet',' $six_otvet','$first_score_rb','$first_score_ck')");

    
    header("Location: manager.php");
}
?>




