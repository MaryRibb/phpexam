<?php
    $variant = $_POST['variant'];
    $fryct = $_POST['fryct'];
    $ovosh = $_POST['ovosh'];
    $contact = $_POST['contact'];
    
    

    $mysql = new mysqli('std-mysql', 'std_943_21', 'MR20022001','std_943_21');
    $mysql->query("INSERT INTO test (variant,fryct,ovosh,contact) VALUES ('$variant','$fryct','$ovosh','$contact')");
   
   
    $mysql->close();
    header ("Location: index.php"); 
    
     exit();

?>