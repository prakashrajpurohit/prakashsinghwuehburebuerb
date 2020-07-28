<?php

include('db.php');

?>

<html>  
    <head> <!-- Meta tag Keywords -->
    <style>
body  {
  background-image: url("111.jpg");
  background-repeat: no-repeat;
  background-size: auto;
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;

}
</style>  
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
   
        <title>Chat Application using PHP Ajax Jquery</title>  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
   <br />
   
   <h2 align="center"><a href="login.php"><img src="2.jpg"></a>  Easy Health Care Solutions </h2><br />
   <br>

<br>
		<!-- title -->
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
				</div>
				<form action="#" method="post">
					<p class="legend">Appointment<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<input type="text" name = "name" class="form-control" placeholder="Name" required />
					</div>
					<div class="input">
						<input type="number" name="mob_number" class="form-control" placeholder="Phone Number" required />
          </div>
          <div class="input">
						<input type="email" name="email" class="form-control" placeholder="Email" required />
          </div>
          <div class="input">
						<input type="text" name="doc_name" class="form-control" placeholder="Doctor Name" required />
					</div>
            <button type="submit"  name="submit" class="btn submit">
						
						<span class="fa fa-sign-in"></span>
					</button>
					
				</form>
</a>
<br><br>

			</div>
		</div>
		<!-- //content -->
		<!-- copyright -->
		<div class="copyright">
			<h2>All rights reserved
			</h2>
		</div>
		<!-- //copyright -->
	</div>
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

         if($doc_name == 'dentist')   //form valuues in database
         {
             echo "dentist";
             $query = "INSERT INTO dentist (name,mob_number,email,doc_name) VALUES ('$name','$mob_number','$email','$doc_name')";
             mysqli_query($conn,$query); 
         }

         else 
         {
             echo "select another";
         }



    
        }
   
      ?>
</html>