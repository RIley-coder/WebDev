<?php
$apiKey = "1807bea4746e0fe77141b46b7a825d8e"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "metric";//metric-Celcius  imperial-Farhenheit
if ($units == 'metric'){//Changes the $temp varaible to match 
    $temp = "C";
}
else {
    $temp = "F";
}
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=" . $units . "&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>
<html lang="en">
<!--Version 9.0 
	Name:
	Date Completed:
    -->

<head>
    <title>Riley's Amazing Webpage</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="5.4 Final Project" content="Riley's Amzing Website">

    <title>Web Dev User #21 </title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

        td {
            color: #FF0000;
        }
        .report-container {
    border: #E0E0E0 1px solid;
    padding: 20px 40px 40px 40px;
    border-radius: 2px;
    width: 550px;
    margin: 0 auto;
}

.weather-icon {
    vertical-align: middle;
    margin-right: 20px;
}

.weather-forecast {
    color: #212121;
    font-size: 1.2em;
    font-weight: bold;
    margin: 20px 0px;
}

span.min-temperature {
    margin-left: 15px;
    color: #929292;
}

.time {
    line-height: 25px;
}

    </style>
    <style>
        p {
            padding: 20px;
            font: 20px sans-serif;
            background: khaki;
        }

    </style>
    <script>
        $(document).ready(function() {
            $("p").click(function() {
                $(this).slideUp();
            });
        });

    </script>

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
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="Script.html" class="nav-item nav-link">Games</a>
                    <a href="music.html" class="nav-item nav-link" tabindex="-1">Music</a>
                    <a href="List.html" class="nav-item nav-link" tabindex="-1">Lists</a>
                    <a href="AboutMe.html" class="nav-item nav-link">About Me</a>
                    <a href="wheresMyStudent.html" class="nav-item nav-link">Hall Pass</a>
                    <a href="Ebay.php" class="nav-item nav-link">Ebay</a>
                    <a href="mailto:sample@gmail.com?Subject=Hello" class="nav-item nav-link" tabindex="-2">Contacts</a>
                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="#" class="nav-item nav-link disabled">Login</a>
                </div>
            </div>
        </nav>
    </div>

    <center>Riley's Amazing Webpage</center>

    <div class='col-md=13'>
        <p>Click on me and see what happens</p>
        <p>I am a magician and I can make all of your dreams disappear</p>
        <p>I bet that you won't click on me</p>

    </div>


    <div class='col-lg=4'>
        <img src="https://d38trduahtodj3.cloudfront.net/images.ashx?t=ig&rid=DickinsonCVB&i=pizza_ranch(1).jpg&w=330&h=330&cropbox=1&cropboxhpos=center&stf=1" height=200pxS>
        You'll be sitting on the toilet afterwards

    </div>
    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;<?php echo $temp; ?><span class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;<?php echo $temp; ?></span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>

    <body>

        <html>
