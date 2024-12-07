<?php
    
    $connection = mysqli_connect('localhost','root','','travel_book_db');

    if(!$connection){
        die("Connection Failed");
    }

  
     if(isset($_GET['id'])){
         $id = $_GET['id'];

     

         $query ="select * from book_form where id=$id";
         $result = mysqli_query($connection, $query);

         if(!$result){
          die("query Failed" .mysqli_error());
         }else{
           $row =mysqli_fetch_assoc($result);
           
        }
    }
?>

   
<?php
       if(isset($_POST['update_book'])){

        if(isset($_GET['id_new'])){
            $idnew=$_GET['id_new'];
        }

         $name= $_POST['name'];
         $email= $_POST['email'];
         $phone= $_POST['phone'];
         $address= $_POST['address'];
         $location= $_POST['location'];
         $guests= $_POST['guests'];
         $arrivals= $_POST['arrivals'];
         $leaving= $_POST['leaving'];

         $query= "update book_form set name='$name', email='$email', phone='$phone', address='$address', 
         location='$location', guests='$guests',arrivals='$arrivals',leaving='$leaving' where id=$idnew";


         $result = mysqli_query($connection, $query);

         if(!$result){
          die("query Failed" .mysqli_error());
         }else{
           header('location:book_display.php? update_msg=You have successfully updated the data.');
           
        }


       }

    ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!--swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <!--custom css file link-->
    <link rel="stylesheet" href="style.css">



</head>
<body>

<section class="booking">
    <h1 class="heading-title">update your trip</h1>


    <form action="update.php?id_new=<?php echo $id;?>" method="post" class="book-form" id="bookingForm">
        <div class="flex">
        
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name" value="<?php echo $row['name']; ?>" >
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="text" placeholder="enter your email" name="email" id="email" value="<?php echo $row['email']; ?>">
                <div class="error" id="emailError" style="color: red; display: none;">Please enter a valid email address.</div>
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="text" placeholder="enter 10 digit phone-number" name="phone" id="phone" maxlength="10" value="<?php echo $row['phone']; ?>" >
                <div class="error" id="phoneError" style="color: red; display: none;">Phone number must be exactly 10 digits.</div>
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address" value="<?php echo $row['address'];?>" >
            </div>

            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location" value="<?php echo $row['location'];?>" >
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests" value="<?php echo $row['guests'];?>">
            </div>

            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals" value="<?php echo $row['arrivals'];?>">
            </div>

            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving" value="<?php echo $row['leaving'];?>" >
            </div>
        </div>

        <input type="submit" value="update" class="btn" name="update_book">
    </form>
</section>

</body>