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
    $valueToSearch = $_POST['valueToSearch'];
    $country = $_POST['country'];
    // search in all table columns
    // using concat mysql function

    if ($country != ''){
        $query = "call findAttractions('$valueToSearch','$country')";
    }
    else{   
        $query = "SELECT *
                FROM
                (SELECT 	Trail_Name AS name, 'Hiking_Trail' AS type
                FROM 		Hiking_Trail
                WHERE		NA_Name IN (SELECT TS_Name
                                                        FROM Tourist_Spot)
                UNION 
                SELECT 	Building_Name AS name, 'Building' AS type
                FROM 		Building
                WHERE		CA_Name IN (SELECT TS_Name
                                                        FROM Tourist_Spot)) AS T";
    }
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT *
                FROM
                (SELECT 	Trail_Name AS name, 'Hiking_Trail' AS type
                FROM 		Hiking_Trail
                WHERE		NA_Name IN (SELECT TS_Name
                                                        FROM Tourist_Spot)
                UNION 
                SELECT 	Building_Name AS name, 'Building' AS type
                FROM 		Building
                WHERE		CA_Name IN (SELECT TS_Name
                                                        FROM Tourist_Spot)) AS T";
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
                        Try Value: A, Country: United States and will return Apgar Lookout and Artist Paint Pots
                        <hr> 
                        <small>Empty input will return all hiking trials and buildings in database</small>
                    </h1>
                </div>
            </div>
        </div>
        
        <div class="container" >
            <form action="get_by_prefix.php" method="post">
                <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                    <input type="text" name="valueToSearch" class="form-control" placeholder="Value to Search (Optional)" >
                    <input type="text" name="country" class="form-control" placeholder="Country (Required)" >
                </div>      
                <input type="submit" name="search" value="Filter" ><br><br>
                </div>
            </form>
        
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                </tr>
                <?php endwhile;?>
            </table>
                <hr>
            <p>
                <a href="../html/SemiFinal.html">
                    <button>Main Menu</button>
                </a>
            </p>
        </div>
        

    </body>
</html>
