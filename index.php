<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Welcome</title>

    <!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="./css/custom.css" rel="stylesheet">


    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

</head>
<?php
session_start();
?>
<body>

    <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    TRAVELLER
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="./php/homepage/nature.php">Nature</a>
                    </li>
                    <li>
                        <a href="./php/homepage/culture.php">Culture</a>
                    </li>
                    <li>
                        <a href="./php/homepage/feedback.php">Feedback</a>
                    </li>
                    <li>
                        <a href="./php/attraction/Data Warehouse.php">Data Warehouse</a>
                    </li>
                    <?php if (!empty($_SESSION["username"])) { ?>
                        <li><a href="./php/homepage/auinfo.php"> <?php echo 'Hi, '.$_SESSION["username"];?></a> </li>
                        <li><a href="./registration/main.php?logout='1'">Log Out</a></li>
                    <?php } else { ?>
                        <li><a href="./registration/login.php">Log In</a></li>
                    <?php } ?>
                    
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

    <!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Welcome</h1>
                <p>A place to inspire your travel idea.</p>
                <?php if (empty($_SESSION["username"])) { ?>
                        <a href="./registration/register.php" class="btn btn-primary btn-lg">Become a Member</a>
                    <?php } ?>
            </div>
        </div>
    </header>


</body>

</html>