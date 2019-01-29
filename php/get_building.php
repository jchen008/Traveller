<?php

// Connection parameters 
$host = 'mpcs53001.cs.uchicago.edu';
$username = 'zhc008';
$password = 'voh9eiHo';
$database = $username.'DB';

// Attempting to connect 
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());

// Selecting a database
//   Unnecessary in this case because we have already selected 
//   the right database with the connect statement.  
mysqli_select_db($dbcon, $database)
   or die('Could not select database');


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['search']))
{
    $country = $_POST['country'];
    $building = $_POST['building'];
    // search in all table columns
    // using concat mysql function

    if ($country != ''){
        $query = "SELECT Building_Name, Year_Built, Designer, TS_Name, Country_Name
            FROM (SELECT Building_Name, Year_Built, Designer, CA_Name as TS_Name
            FROM Building) AS T NATURAL JOIN Tourist_Spot WHERE Country_Name = '$country'";
    }
    else{
        if ($building != ''){   
            $query = "SELECT Building_Name, Year_Built, Designer, TS_Name, Country_Name
                FROM (SELECT Building_Name, Year_Built, Designer, CA_Name as TS_Name
                FROM Building) AS T NATURAL JOIN Tourist_Spot WHERE Building_Name = '$building';";
        }else{
            $query = "SELECT Building_Name, Year_Built, Designer, TS_Name, Country_Name
            FROM (SELECT Building_Name, Year_Built, Designer, CA_Name as TS_Name
            FROM Building) AS T NATURAL JOIN Tourist_Spot;";
        }
    }
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT Building_Name, Year_Built, Designer, TS_Name, Country_Name
            FROM (SELECT Building_Name, Year_Built, Designer, CA_Name as TS_Name
            FROM Building) AS T NATURAL JOIN Tourist_Spot;";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $host = 'mpcs53001.cs.uchicago.edu';
    $username = 'zhc008';
    $password = 'voh9eiHo';
    $database = $username.'DB';

    // Attempting to connect 
    $dbcon = mysqli_connect($host, $username, $password, $database)
    or die('Could not connect: ' . mysqli_connect_error());
    
    mysqli_select_db($dbcon, $database)
    or die('Could not select database');
    $filter_Result = mysqli_query($dbcon, $query);

    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
            body { padding-top:50px; }
        </style>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/custom.css" rel="stylesheet">
    </head>
    <body>
        <div class = "container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Try Value: United States, and it will return the buildings locate in United States or input a single building name in building field
                        <hr> 
                        <small>Empty Input will return all buildings in database</small>
                    </h1>
                </div>
            </div>
        </div>
        
        <div class="container" >
            <form action="get_building.php" method="post">
                <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                    <input type="text" name="country" class="form-control" placeholder="Country (Optional)" >
                    <input type="text" name="building" class="form-control" placeholder="Building (Optional)" >
                </div>      
                <input type="submit" name="search" value="Filter" ><br><br>
                </div>
            </form>
        
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Designer</th>
                    <th>Cultural Attraction</th>
                    <th>Country</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4];?></td>
                </tr>
                <?php endwhile;?>
            </table>
            <p>
                <a href="../html/SemiFinal.html">
                    <button>Main Menu</button>
                </a>
            </p>
            <hr> 
        </div>
        


    </body>
</html>
