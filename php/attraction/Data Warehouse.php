
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Data Warehouse</title>

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
                            <a href="../../index.php">Go Back</a>
                        </li>
                    </ul>
        
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

    <!-- Feature -->

  
    <div class="jumbotron feature" style = "background: url('../../images/dataware.jpg');">
            <div class="container">
                    <h1>Data Warehouse</h1>
            </div>
    </div>


    <!-- Heading -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center" style = "color: maroon">Idea</h1>
                <p class="lead">
                        There are many useful data that can be extracted and transformed for data analysis, so it is necessary and 
                    efficient to use data warehousing. As more and more user register on our website, we can gather a large amount of data comprising
                    birthday, phone number. By utilizing birthday, we can track the user age group and utilizing phone number allows us to know where 
                    locates most of our users. Using Registration, Natural attractions, and Cultural attractions, and tracking the changes of these tables over time. 
                    We can get to know which attractions are favorited by which type of people, according to their age or location. This information is important because as we know people
                    in a certain country generally prefer to go to a type of attractions, we can provide better attraction advisement based on the historical data.
                </p>
                <p class="lead">
                        Another potential good idea to put in a data warehouse is to transform data to analyze the performance of each tourist attractions based on their score, using Tourist_Attraction, 
                    Comment, and Registration. For each attraction, Tourist_Attraction provides the average score. Comments give us the score change over time and Registration gives us the type 
                    of user who gives the specific score. After analyzing all the data, we can create a graph which shows the performance of each tourist attractions based on different users. For example, as time
                    goes on, the score of the Grand Canyon is increased evaluated by young people, but the score is actually decreased evaluated by old people. This may be caused by a TV show which displays the Grand 
                    Canyon as a great place to take an adventure, so more and more young people start to like it. Giving the conclusion to each attraction can give them a better idea how to advertise their parks and how they need to improve. 
                </p>
                <p class="lead">
                        All the data collecting overtime from the updates of our data warehouse offers plenty of useful training data set for using machine learning technique. After training a model by the data we collected, we can make our website more
                    intelligent and provides better traveling idea suggestion.
                </p>
            </div>
        </div>
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