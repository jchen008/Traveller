
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Milan Cathedral</title>

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
                    <h1>Milan Cathedral</h1>
                    <p>Milan, Italy</p>
            </div>
    </div>


    <!-- Heading -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center" style = "color: maroon">Introduction</h1>
                <p class="lead"> The Duomo, besides being an artistic monument, is a privileged place of prayer. 
                The Cathedral is strongly linked to memory and to the Magisterium of the Bishops who have succeeded 
                to the Throne of St. Ambrose and to the history of the millions of faithful who collect their thoughts there 
                each year to celebrate the Sacred Mysteries. The Cathedral is the Mother Church of the Diocese, which 
                has a symbolic exemplary function both with regard to the life of religion in the city, and with regard 
                to diocesan activity. Liturgical activity is the true essence of the Cathedral: the Duomo is the heart 
                of liturgical tradition which, referring to the figure of St. Ambrose, is an expression of the tangible 
                form with which the apostolic tradition is deeply rooted and has developed over the centuries in the Church 
                of Milan. In the Duomo, daily liturgical worship is practiced in many different forms: not only celebrations
                of the Eucharist, but also, because of the constant presence of the Metropolitan Chapter, the Liturgy of the
                Hours, as preparation for and prolongation of the Eucharist. Particular attention is paid to Eucharistic Adoration,
                the Liturgy of the Word, celebration of the Sacrament of Reconciliation and to the most genuine and sincere forms of
                “popular piety”, such as reciting of the Rosary and, during Lent, the practice of the Stations of the Cross. Liturgical
                worship by the faithful is the essence of the Cathedral which, in all of its expressions, above all through the
                countless works of art that it has preserved for centuries, is required to live and give testimony in the very 
                heart of the city to faithfulness to Christ's Gospel. </p>
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
                $query = 'SELECT Building_Name, Year_Built, Designer FROM Building WHERE CA_Name = "Milan Cathedral" ';
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
                            WHERE CA_Name =  "Milan Cathedral" ';
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