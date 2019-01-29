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
if(isset($_REQUEST['user']))
{
    $valueToSearch = $_REQUEST['user'];
    // search in all table columns
    // using concat mysql function
    if ($valueToSearch == ''){
        $query = "SELECT *
            FROM (SELECT H.Trail_Name, N.Average_Temp,
            CASE
                WHEN H.Distance < 3 THEN 'Short'
                WHEN H.Distance >= 3 AND H.Distance < 7 THEN 'Medium'
                ELSE 'Long'
            END AS Difficulty
            FROM Hiking_Trail H, Natural_Attractions N
            WHERE H.NA_Name = N.NA_Name) AS T
            WHERE T.Difficulty = difficulty";
    }else{
        $query = "CALL findTrails('$valueToSearch')";
    }
    $search_result = filterTable($query);
    
}else{
    $query = "	SELECT *
        FROM (SELECT H.Trail_Name, N.Average_Temp,
        CASE
            WHEN H.Distance < 3 THEN 'Short'
            WHEN H.Distance >= 3 AND H.Distance < 7 THEN 'Medium'
            ELSE 'Long'
        END AS Difficulty
        FROM Hiking_Trail H, Natural_Attractions N
        WHERE H.NA_Name = N.NA_Name) AS T
        WHERE T.Difficulty = difficulty";
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
                        Try Value: Long, and it will return all trials of long distance 
                        <hr> 
                        <small>Select default 'Select' will return all trails</small>
                    </h1>
                </div>
            </div>
        </div>
        

        <div class="container" >
            <form action="get_by_difficulty.php" method="request">
                <div class="form-group">
                <div class="input-group">
                    <select name="user" id="user">
                        <option value="">Select</option>
                        <option value="Short">Short</option>
                        <option value="Medium">Medium</option>
                        <option value="Long">Long</option>
                    </select>
                </div>      
                <input type="submit" name="search" value="Select" ><br><br>
                </div>
            </form>
        
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Average Temperature</th>
                    <th>Level</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
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
