
<?php
$connect = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');

if(isset($_POST['first_question'])) {
    

       
     $id_r=rand(5, 15);
     $id_rе=rand(5, 15);
     $session_id = $id_r * $id_rе;
     $link = 'link.php?session_id=' . $session_id;
     $insert_query = mysqli_query($connect, "INSERT INTO `sessions` (link, status) VALUES ('$link','Открыта')");
    
   

    $first_question = mysqli_real_escape_string($connect, htmlspecialchars($_POST['first_question']));
    $insert_query = mysqli_query($connect, "INSERT INTO `first_type` (session_id, question) VALUES ('$session_id','$first_question')");

    $second_question = mysqli_real_escape_string($connect, htmlspecialchars($_POST['second_question']));
    $insert_query = mysqli_query($connect, "INSERT INTO `second_type` (session_id, question) VALUES ('$session_id','$second_question')");

    $third_question = mysqli_real_escape_string($connect, htmlspecialchars($_POST['third_question']));
    $insert_query = mysqli_query($connect, "INSERT INTO `third_type` (session_id, question) VALUES ('$session_id','$third_question')");

    $fourth_question = mysqli_real_escape_string($connect, htmlspecialchars($_POST['fourth_question']));
    $insert_query = mysqli_query($connect, "INSERT INTO `fourth_type` (session_id, question) VALUES ('$session_id','$fourth_question')");

    $five_question = mysqli_real_escape_string($connect, htmlspecialchars($_POST['five_question']));
    $first_rb = mysqli_real_escape_string($connect, htmlspecialchars($_POST['first_rb']));
    $first_score_rb = mysqli_real_escape_string($connect, htmlspecialchars($_POST['first_score_rb']));
    $second_rb = mysqli_real_escape_string($connect, htmlspecialchars($_POST['second_rb']));
    $second_csore_rb = mysqli_real_escape_string($connect, htmlspecialchars($_POST['second_csore_rb']));

    $insert_query = mysqli_query($connect, "INSERT INTO `five_type` (session_id, question,first_rb,first_score_rb,second_rb,second_csore_rb)
     VALUES ('$session_id','$five_question','$first_rb','$first_score_rb','$second_rb','$second_csore_rb')");
    
    $six_question = mysqli_real_escape_string($connect, htmlspecialchars($_POST['six_question']));
    $first_check = mysqli_real_escape_string($connect, htmlspecialchars($_POST['first_check']));
    $first_score_ck = mysqli_real_escape_string($connect, htmlspecialchars($_POST['first_score_ck']));
    $second_check = mysqli_real_escape_string($connect, htmlspecialchars($_POST['second_check']));
    $second_score_ck = mysqli_real_escape_string($connect, htmlspecialchars($_POST['second_score_ck']));
    $third_check = mysqli_real_escape_string($connect, htmlspecialchars($_POST['third_check']));
    $third_score_ck = mysqli_real_escape_string($connect, htmlspecialchars($_POST['third_score_ck']));
    $insert_query = mysqli_query($connect, "INSERT INTO `six_type` (session_id, question,first_check,first_score_ck,second_check,second_score_ck,third_check,third_score_ck)
     VALUES ('$session_id','$six_question','$first_check','$first_score_ck','$second_check','$second_score_ck',' $third_check','$third_score_ck')");
    header("Location: manager.php");
}
?>