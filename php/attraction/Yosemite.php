<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Yosemite</title>

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
                            <a href="../homepage/nature.php">Go Back</a>
                        </li>
                    </ul>
        
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

    <!-- Feature -->

  
    <div class="jumbotron feature">
        <div class="container">
                <h1>Yosemite</h1>
                <p>National Park, Sierra Nevada of Central California, United States</p>
        </div>
        </div>
    </div>


    <!-- Heading -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center">Introduction</h1>
                <p class="lead">Yosemite National Park is an American national park located in the western Sierra 
                    Nevada of Central California,bounded on the southeast by Sierra National Forest and on the northwest 
                    by Stanislaus National Forest. The park, which is managed by the National Park Service, covers an area 
                    of 747,956 acres and sits in four counties: centered in Tuolumne and Mariposa, extending north and
                    east to Mono and south to Madera County. Designated a World Heritage site in 1984, 
                    Yosemite is internationally recognized for its granite cliffs, waterfalls, clear streams, giant sequoia
                    groves, lakes, mountains, meadows, glaciers, and biological diversity.
                    Almost 95% of the park is designated wilderness.</p>
            </div>
        </div>
    </div>

    <!-- Promos -->
    <div class="container-fluid">
        <div class="row promo">
            <a href="#">
                <div class="col-md-4 promo-item item-1">
                    <h3>
                        Experience More
                    </h3>
                </div>
            </a>
            <a href="#">
                <div class="col-md-4 promo-item item-2">
                    <h3>
                        Enjoy More
                    </h3>
                </div>
            </a>

            <a href="#">
                <div class="col-md-4 promo-item item-3">
                    <h3>
                        Explore More
                    </h3>
                </div>
            </a>
        </div>
    </div><!-- /.container-fluid -->

   


    <div class="container">
        <h1 class="text-center">Open Trails</h1>        
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Distance (km)</th>
                    <th>Average Time (hr)</th>
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
                $query = 'SELECT Trail_Name, Distance, Average_Time FROM Hiking_Trail WHERE NA_Name = "Yosemite" ';
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
        <h1 class="text-center">Open Resturants</h1>        
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
                $query = 'SELECT Resturant_Name, Food_Type, Num, Star, NA_Name FROM NA_Offer Natural Join Resturant
                            WHERE NA_Name =  "Yosemite" ';
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