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

    <title>Nature</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="../../css/custom.css" rel="stylesheet">


    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

</head>
<?php session_start(); ?>
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
                    <li>
                        <a href="../../index.php">Home</a>
                    </li>
                    <li class = "active">
                        <a href="./nature.php">Nature</a>
                    </li>
                    <li>
                        <a href="./culture.php">Culture</a>
                    </li>
                    <li>
                        <a href="./feedback.php">Feedback</a>
                    </li>
                    <li>
                        <a href="../attraction/Data Warehouse.php">Data Warehouse</a>
                    </li>
                    <?php if (!empty($_SESSION["username"])) { ?>
                        <li><a href="auinfo.php"> <?php echo 'Hi, '.$_SESSION["username"];?></a> </li>
                        <li><a href="../../registration/main.php?logout='1'">Log Out</a></li>
                    <?php } else { ?>
                        <li><a href="../../registration/login.php">Log In</a></li>
                    <?php } ?>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

<header>
    <div class="header-content">
        <div class="container">
            <h1 class="page-header">Natural Attractions
            </h1>
            <?php include('na_server.php'); ?>
                <form action="nature.php" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="country" id="fname" placeholder="Enter Country" required>
                        </div>
                        </div>

                        <div class="col-sm-3">
                        <div class="form-group">
                            <input type="text" class="form-control" name="view" id="lname" placeholder="Enter View" required>
                        </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="na" id="lname" placeholder="Enter Natural Park" required>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="search" id="submit" value="Submit" class="btn btn-info pull-right" required="required">Search/Reset</button>
                        </div>
                        </div>
                    </div>
                </form>
        </div>



        
            <table class="table table-bordered table-striped" style="background-color: black, color:black, position: absolute">
                <tr>
                    <th style = "text-align:center">Name</th>
                    <th style = "text-align:center">View</th>
                    <th style = "text-align:center">Temperature</th>
                    <th style = "text-align:center">Country</th>
                    <th style = "text-align:center">Average Score</th>
                </tr>

      <!-- populate table from mysql database -->
                
                <?php if (mysqli_num_rows($search_result) == 0) { ?>
                    <?php echo "<p>No Result, Try Other Option</p>"; ?>
                <?php } else { ?>
                    <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                        <td><?php echo "<a href='../attraction/$row[0].php'>$row[0]</a>";?></td>
                        <td><?php echo $row[1];?></td>
                        <td><?php echo $row[2];?></td>
                        <td><?php echo $row[3];?></td>
                        <td><?php echo $row[4];?></td>
                    </tr>
                    <?php endwhile;?>
                <?php } ?>

            </table>
            <hr> 
        </div>

        
        </div>
    </header>

<!--
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <span class="glyphicon glyphicon-apple" style="font-size: 60px"></span>
                    <p class="text-light">&copy; 2018 Zhuo Chen University of Chicago</p>
                </div>
            </div>
        </div>
    -->

<!--
        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <form action="/my-handling-form-page" method="post">
                            <div>
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="user_name">
                            </div>
                            <div>
                                <label for="mail">E-mail:</label>
                                <input type="email" id="mail" name="user_mail">
                            </div>
                            <div>
                                <label for="msg">Message:</label>
                                <textarea id="msg" name="user_message"></textarea>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
-->
    


</body>

</html>