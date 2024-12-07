<?php
    
    $connection = mysqli_connect('localhost','root','','travel_book_db');

    if(!$connection){
        die("Connection Failed");
    }

?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
    

     <!--swiper css link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

     <!--font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">


    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 </head>
 <body>

    <div class="box1">
    <h1 class="heading-title">CLIENT DETAILS<h1>
    <a href="book.php" class="btn-primary">book new </a>
    </div> 
    <div class="table-container">
        <table class="table table-hover table-bordered table-striped">
           <thead>

              <tr>
                <th>ID</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Phone</th>
                 <th>Address</th>
                 <th>Where to</th>
                 <th>How many guests</th>
                 <th>Arival date</th>
                 <th>Leaving date</th>
                 <th>Update</th>
                 <th>Delete</th>

              </tr>

           </thead>

           <tbody>
             <?php

               $query ="select * from book_form ";
               $result = mysqli_query($connection, $query);

               if(!$result){
                die("query Failed" .mysqli_error());
               }else{
                
                 while($row = mysqli_fetch_assoc($result)){
                   
                    ?>
                   <tr>

                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['phone']; ?></td>
                      <td><?php echo $row['address']; ?></td>
                      <td><?php echo $row['location']; ?></td>
                      <td><?php echo $row['guests']; ?></td>
                      <td><?php echo $row['arrivals']; ?></td>
                      <td><?php echo $row['leaving']; ?></td>
                      <td><a href="update.php?id=<?php echo $row['id']; ?>"class="btn btn-success">Update</a></td>
                      <td><a href="delete.php?id=<?php echo $row['id']; ?>"class="btn btn-danger" >Delete</a></td>

                   </tr>
                  
                 
                   <?php
                        
                 }
               }


             ?>
       
           </tbody>

       </table>

       <?php
          if(isset($_GET['insert_msg'])){
            echo "<h6>".$_GET['insert_msg']."</h6>";
          }
        ?>

       <?php
          if(isset($_GET['update_msg'])){
            echo "<h6>".$_GET['update_msg']."</h6>";
          }
        ?>

      <?php
          if(isset($_GET['delete_msg'])){
            echo "<h6>".$_GET['delete_msg']."</h6>";
          }
        ?>

        
    </div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>