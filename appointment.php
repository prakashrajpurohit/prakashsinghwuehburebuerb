<?php

include('db.php');

?>

<!DOCTYPE html>
<html>

  <head> 
   <title> </title>
   </head>

   <body>
    
    <form method = "POST">
    <p> name </p>
     <input type = "text" name = "name">
     </br>
     <p> mob number </p>
     <input type = "number" name = "mob_number">
     </br>
     <p> email </p>
     <input type = "text" name = "email">
     </br>
     <p> doc_name </p>
     <input type = "text" name = "doc_name">
     </br>
     <p> time slots available </p>
     <input type = "text" name = "time_avail">
     <p> submit </p>
     <input type = "submit" value = "submit" name = "submit">
     </form>
     
     </body>

     <?php

$query ="SELECT count(id) AS total FROM dentist";     //counting rows in databse
$result = mysqli_query($conn,$query);
$value = mysqli_fetch_assoc($result);
$num_row = $value['total'];
echo "$num_row"; 
echo "<br>";























  



     if(isset($_POST['submit'])){
         $name = $_POST['name'];
         $mob_number = $_POST['mob_number'];
         $email = $_POST['email'];
         $doc_name = $_POST['doc_name'];
        $time_avail = $_POST['time_avail'];

         if($doc_name == 'dentist')   //form valuues in database
         {
             echo "dentist";
             $query = "INSERT INTO dentist (name,mob_number,email,doc_name,time) VALUES ('$name','$mob_number','$email','$doc_name','$time_avail')";
             mysqli_query($conn,$query); 
         }

         else 
         {
             echo "select another";
         }



    
        }
   
      ?>

     </html>