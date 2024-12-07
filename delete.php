<?php
    
    $connection = mysqli_connect('localhost','root','','travel_book_db');

    if(!$connection){
        die("Connection Failed");
    }
?>

<?php

   if(isset($_GET['id'])){
    $id=$_GET['id'];
   

    $query = "delete from book_form where id=$id";
    $result=mysqli_query($connection,$query);

    if(!$result){
        die("query Failed" .mysqli_error());
    }
    else{
        header('location:book_display.php? delete_msg=You have deleted the record.');
    }
   }
?>
