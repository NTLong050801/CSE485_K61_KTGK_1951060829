<?php 
include('cogfig.php');
    $bd_id = $_GET['bd_id'];
    $delete = mysqli_query($conn,"Delete from blood_donor where bd_id = '$bd_id'");
    if($delete) {   
        header('location:index.php');
    }
    else {
        header('location:error.php');
    }
    

?>