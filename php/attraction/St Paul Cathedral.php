
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>St Paul Cathedral</title>

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
                    <h1>St Paul Cathedral</h1>
                    <p>London, United Kingdom</p>
            </div>
    </div>


    <!-- Heading -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center" style = "color: maroon">Introduction</h1>
                <p class="lead"> St Paul's Cathedral, London, is an Anglican cathedral, the seat of the Bishop 
                of London and the mother church of the Diocese of London. It sits on Ludgate Hill at the highest 
                point of the City of London and is a Grade I listed building. Its dedication to Paul the Apostle 
                dates back to the original church on this site, founded in AD 604.[1] The present cathedral, dating 
                from the late 17th century, was designed in the English Baroque style by Sir Christopher Wren.
                Its construction, completed in Wren's lifetime, was part of a major rebuilding programme in the City 
                after the Great Fire of London.</p>
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
                $query = 'SELECT Building_Name, Year_Built, Designer FROM Building WHERE CA_Name = "St Paul Cathedral" ';
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
                            WHERE CA_Name =  "St Paul Cathedral" ';
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