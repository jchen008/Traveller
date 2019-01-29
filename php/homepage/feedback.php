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

    <title>Feedback</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="../../css/custom.css" rel="stylesheet">


    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    
    <style>
        select {
        color: #9e9e9e;
        height:37px;
        width:250px
        }
        option:not(:first-of-type) {
        color: black;
        }
    </style>

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
                    <li>
                        <a href="./nature.php">Nature</a>
                    </li>
                    <li>
                        <a href="./culture.php">Culture</a>
                    </li>
                    <li class = "active">
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


<?php
    $host = 'mpcs53001.cs.uchicago.edu';
    $username = 'zhc008';
    $password = 'voh9eiHo';
    $database = $username.'DB';
    $dbcon = mysqli_connect($host, $username, $password, $database)
    or die('Could not connect: ' . mysqli_connect_error());
    mysqli_select_db($dbcon, $database)
    or die('Could not select database');

    $query="SELECT TS_Name FROM Tourist_Spot";
    $get = mysqli_query($dbcon, $query);;
    $option = '';
    while($row = mysqli_fetch_array($get))
    {
    $option .= '<option value = "'.$row['TS_Name'].'">'.$row['TS_Name'].'</option>';
    }
?>

<header>
    <div class="header-content">
        <div class="container">
            <h1 class="page-header">Please Score Your Experience
            </h1>
            <?php include('fe_server.php'); ?>
                <form action="feedback.php" method="post">
                    <div class="row">
                        <div class="col-sm-3">
                        
                        <select name="attraction" stye = "color: black" required> 
                            <option value="" >Select the Attraction</option>
                            <?php echo $option; ?>
                        </select>

                        </div>
                        
                        <div class="col-sm-3">
                            <select name="star" stye = "color: black" placeholder="Enter Comment" required> 
                                <option value="">Choose a Score</option>
                                <?php
                                for ($i=1; $i<=10; $i++){
                                ?>
                                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" name="comment" id="lname" placeholder="Enter Comment" >
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="search" id="submit" value="Submit" class="btn btn-info pull-right" required="required">Submit</button>
                        </div>
                        </div>
                    </div>
                </form>
        </div>



        
            <table class="table table-bordered table-striped" style="background-color: black, color:black, position: absolute">
                <tr>
                    <th style = "text-align:center">Name</th>
                    <th style = "text-align:center">Attraction</th>
                    <th style = "text-align:center">Score</th>
                    <th style = "text-align:center">Comment</th>

                </tr>

      <!-- populate table from mysql database -->
            <?php if (mysqli_num_rows($search_result) == 0) { ?>
                    <?php echo "<p>No Comment</p>"; ?>
                <?php } else { ?>
                    <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                        <td><?php echo $row[0];?></td>
                        <td><?php echo $row[1];?></td>
                        <td><?php echo $row[2];?></td>
                        <td><?php echo $row[3];?></td>
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