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

    <title>Account</title>

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
                    <li>
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
                        <li class = "active"><a href="./auinfo.php"> <?php echo 'Hi, '.$_SESSION["username"];?></a> </li>
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
            <h1 class="page-header">Account
            </h1>
            <?php include('au_server.php'); ?>
                <form action="auinfo.php" method="post" >
                    <div class="row">
                        <div class="col-sm-3">
                        <div class="navbar-header">
                            Name:
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <?php echo $_SESSION["username"]; ?>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                        <div class="navbar-header">
                            Nickname:
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <?php if (!empty($_SESSION["nickname"])) { ?>
                                <input type="text" class="form-control" name="nickname" id="fname" placeholder="Enter Nickname" value='<?php echo $_SESSION["nickname"]; ?>' >
                            <?php } else { ?>
                                <input type="text" class="form-control" name="nickname" id="fname" placeholder="Enter Nickname " >
                            <?php } ?>
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="nick_sub" id="submit" value="Submit" class="btn btn-info pull-right" required="required">Update</button>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                        <div class="navbar-header">
                            Email:
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <?php if (!empty($_SESSION["email"])) { ?>
                                <input type="email" class="form-control" name="email"  id="email" placeholder="Enter Email" value='<?php echo $_SESSION["email"]; ?>' required>
                            <?php } else { ?>
                                <input type="email" class="form-control" name="email"  id="email" placeholder="Enter Email" required>
                            <?php } ?>
                            
                        </div>
                        
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="email_sub" id="submit" value="Submit" class="btn btn-info pull-right" required="required">Update</button>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                        <div class="navbar-header">
                            Birthday:
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <?php if (!empty($_SESSION["birthday"])) { ?>
                                <input type="date" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" class="form-control" name="birthday" id="fname" placeholder="Enter Birthday: YYYY-MM-DD" value='<?php echo $_SESSION["birthday"]; ?>' >
                            <?php } else { ?>
                                <input type="date" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" class="form-control" name="birthday" id="fname" placeholder="Enter Birthday: YYYY-MM-DD" >
                            <?php } ?>
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="birthday_sub" id="submit" value="Submit" class="btn btn-info pull-right" required="required">Update</button>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                        <div class="navbar-header">
                            Address1:
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <?php if (!empty($_SESSION["address1"])) { ?>
                                <input type="text" class="form-control" name="address1" id="fname" placeholder="Enter Address1" value='<?php echo $_SESSION["address1"]; ?>' >
                            <?php } else { ?>
                                <input type="text" class="form-control" name="address1" id="fname" placeholder="Enter Address1">
                            <?php } ?>
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="address1_sub" id="submit" value="Submit" class="btn btn-info pull-right" required="required">Update</button>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                        <div class="navbar-header">
                            Address2:
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <?php if (!empty($_SESSION["address2"])) { ?>
                                <input type="text" class="form-control" name="address2" id="fname" placeholder="Enter Address2" value='<?php echo $_SESSION["address2"]; ?>' >
                            <?php } else { ?>
                                <input type="text" class="form-control" name="address2" id="fname" placeholder="Enter Address2">
                            <?php } ?>
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="address2_sub" id="submit" value="Submit" class="btn btn-info pull-right" required="required">Update</button>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                        <div class="navbar-header">
                            Phone:
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <?php if (!empty($_SESSION["phone"])) { ?>
                                <input type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" class="form-control" name="phone" id="fname" placeholder="Enter Phone: 123-456-7890 " value='<?php echo $_SESSION["phone"]; ?>' >
                            <?php } else { ?>
                                <input type="tel" pattern="\d{3}[\-]\d{3}[\-]\d{4}" class="form-control" name="phone" id="fname" placeholder="Enter Phone: 123-456-7890 " >
                            <?php } ?>
                        </div>
                        </div>
                        <div class="col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="phone_sub" id="submit" value="Submit" class="btn btn-info pull-right" required="required">Update</button>
                        </div>
                        </div>
                    </div>
                  
                </form>
        </div>



        
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