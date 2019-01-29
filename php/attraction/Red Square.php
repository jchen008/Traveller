
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Red Square</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="../../css/custom2.css" rel="stylesheet">
</head>



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
                            <a href="../homepage/culture.php">Go Back</a>
                        </li>
                    </ul>
        
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

    <!-- Feature -->

  
    <div class="jumbotron feature" style = "background: url('../../images/background2.jpg');">
            <div class="container">
                    <h1>Red Square</h1>
                    <p>Jerusalem, Isreal</p>
            </div>
    </div>


    <!-- Heading -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center" style = "color: maroon">Introduction</h1>
                <p class="lead"> Built directly east of the Kremlin, Moscow’s historic fortress and the center of the
                Russian government, Red Square is home to some of the country’s most distinctive and important 
                landmarks. Its origins date to the late 15th century, when the Muscovite prince Ivan III (Ivan the Great) 
                expanded the Kremlin to reflect Moscow’s growing power and influence. An important public marketplace and
                meeting place for centuries, Red Square houses the ornate 16th-century St. Basil’s Cathedral, the State 
                Historical Museum and the enormous GUM Department Store, as well as a modernist mausoleum for the 
                revolutionary leader Vladimir Lenin. During the 20th century, the square became famous as the site of large-scale 
                military parades and other demonstrations designed to showcase Soviet strength.</p>
            </div>
        </div>
    </div>

    <!-- Promos -->
    <div class="container-fluid">
        <div class="row promo">
            <a href="#">
                <div class="col-md-4 promo-item item-4">
                    <h3>
                        Experience More
                    </h3>
                </div>
            </a>
            <a href="#">
                <div class="col-md-4 promo-item item-5">
                    <h3>
                        Enjoy More
                    </h3>
                </div>
            </a>

            <a href="#">
                <div class="col-md-4 promo-item item-6">
                    <h3>
                        Explore More
                    </h3>
                </div>
            </a>
        </div>
    </div><!-- /.container-fluid -->

   


    <div class="container">
        <h1 class="text-center" style = "color: maroon">Attractions</h1>        
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Designer</th>
                </tr>
        
                <!-- populate table from mysql database -->
                <?php 
                $host = 'mpcs53001.cs.uchicago.edu';
                $username = 'zhc008';
                $password = 'voh9eiHo';
                $database = $username.'DB';

                // Attempting to connect 
                $dbcon = mysqli_connect($host, $username, $password, $database)
                or die('Could not connect: ' . mysqli_connect_error());

                mysqli_select_db($dbcon, $database)
                or die('Could not select database');

                // Listing tables in your database
                $query = 'SELECT Building_Name, Year_Built, Designer FROM Building WHERE CA_Name = "Red Square" ';
                $result = mysqli_query($dbcon, $query)
                or die('Query failed: ' . mysqli_error());

                ?>
                <?php while($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td>
                        <?php echo $row[0];?>
                    </td>
                    <td>
                        <?php echo $row[1];?>
                    </td>
                    <td>
                        <?php echo $row[2];?>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
    </div>
    <!--/.container-->
   <div class="container">
        <h1 class="text-center" style = "color: maroon">Open Resturants</h1>        
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Food Type</th>
                    <th>Number</th>
                    <th>Star</th>
                </tr>
        
                <!-- populate table from mysql database -->
                <?php 
                $host = 'mpcs53001.cs.uchicago.edu';
                $username = 'zhc008';
                $password = 'voh9eiHo';
                $database = $username.'DB';

                // Attempting to connect 
                $dbcon = mysqli_connect($host, $username, $password, $database)
                or die('Could not connect: ' . mysqli_connect_error());

                mysqli_select_db($dbcon, $database)
                or die('Could not select database');

                // Listing tables in your database
                $query = 'SELECT Resturant_Name, Food_Type, Num, Star, CA_Name FROM CA_Offer Natural Join Resturant
                            WHERE CA_Name =  "Red Square" ';
                $result = mysqli_query($dbcon, $query)
                or die('Query failed: ' . mysqli_error());

                ?>
                <?php while($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td>
                        <?php echo $row[0];?>
                    </td>
                    <td>
                        <?php echo $row[1];?>
                    </td>
                    <td>
                        <?php echo $row[2];?>
                    </td>
                    <td>
                        <?php echo $row[3];?>
                    </td>
                </tr>
                <?php endwhile;?>
            </table>
    </div>
	<footer>


		<!-- Footer Links -->
		<div class="footer-info">
			<div class="container">
        		    <p class="text-center"> &copy; 2018 Zhuo Chen University of Chicago </p>
			</div><!-- /.container -->
        </div>
        
        <!-- Copyright etc -->
        
	</footer>

</body>

</html>