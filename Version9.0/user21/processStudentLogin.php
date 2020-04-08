<?php
//processStudentLogin.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is coming from a form
    
		//mysql credentials
    $mysql_host = "localhost";
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_database = "hallpass";
	
	//delcare PHP variables
	
	$password = $_POST["password"];
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$currentLocation = $_POST["currentLocation"];
	$destinationLocation = $_POST["destinationLocation"];
	$postButton = $_POST["givePass"];
    $passError = ("Please enter a Valid password");
	
	if (empty($password)){
        die($passError);
	}   
if ($password == "123")	
{
	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
    
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}   
    
	$statement = $mysqli->prepare("INSERT INTO studentpass (firstName, lastName, currentLocation, destinationLocation) VALUES(?, ?, ?, ?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ssss', $firstName, $lastName, $currentLocation, $destinationLocation); //bind value
	 if($statement->execute()){
	//print output text
	
	 }else{
		 print $mysqli->error; //show mysql error if any 
	 }
}
else{ 
die($passError);
}	
}			
?>
<!DOCTYPE html>
<html lang="en">
<!--Version 9.0
        Name:
        Date Completed:
    -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="5.4 Final Project" content="Riley's Favorite Foods and Resurants">

    <title>Web Dev User #21 </title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/SampleCSS.css">
    <!-- Custom styles for this template -->
    <style type="text/css">
        .menu {
            margin: 0px;
        }

        .wideMargin {
            margin: 15px;
        }

        #footer {
            font-size: 12px;
            text-align: center;
        }

        ul li {
            color: aqua;
        }

    </style>



</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">WebDev</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link active ">Home</a>
                    <a href="Script.html" class="nav-item nav-link">Games</a>
                    <a href="music.html" class="nav-item nav-link " tabindex="-1">Music</a>
                    <a href="List.html" class="nav-item nav-link" tabindex="-2">Lists</a>
                    <a href="AboutMe.html" class="nav-item nav-link">About Me</a>
                    <a href="wheresMyStudent.html" class="nav-item nav-link">Hall Pass</a>
                    <a href="mailto:sample@gmail.com?Subject=Hello" class="nav-item nav-link disabled" tabindex="-2">Contact</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="#" class="nav-item nav-link disabled">Login</a>
                </div>
            </div>
        </nav>
    </div>

    <?php echo nl2br("Hello ". $firstName ." ". $lastName . "! You are headed to ". $destinationLocation.  "\r\nYou have 8 minutes to return to ". $currentLocation . "\r\n", false); ?>
    <center>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTm6FmD6K8OBohTfoT3hDVlx2lkg4bJjKUnnl2k33d5Qo5d65JC%3Ahttps%3A%2F%2Fst3.depositphotos.com%2F8056928%2F19589%2Fv%2F1600%2Fdepositphotos_195896728-stock-illustration-strict-cartoonish-mustachioed-man-gray.jpg&usqp=CAU"height=300pxS>
        
    </center>
<center>
    <img src=" https://cdn.quotesgram.com/img/48/30/690145042-unique-funny-bad-teacher-quotes-14.jpg
    "height=300pxS>
   
    
    </center>

    <body>

        <html>
