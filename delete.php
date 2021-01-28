<?php
$conn = mysqli_connect('std-mysql', 'std_943_21', 'MR20022001','std_943_21');

if(isset($_GET['line_id'])){
    $line_id=$_GET['line_id'];
    $sql = "DELETE FROM `test` WHERE id='$line_id'";
    $delete_line = mysqli_query($conn,$sql); 

    if($delete_line){
        header("Location: manager.php");
        
        exit;
    
}
}
?>