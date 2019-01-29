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
    // search in all table columns
    // using concat mysql function

    if ($valueToSearch != ''){
        $query = "SELECT Resturant_Name, Food_Type, Num, Star, NA_Name FROM NA_Offer Natural Join Resturant
                    WHERE NA_Name = '$valueToSearch'";
    }
    else{   
        $query = "SELECT Resturant_Name, Food_Type, Num, Star, NA_Name FROM NA_Offer Natural Join Resturant";
    }
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT Resturant_Name, Food_Type, Num, Star, NA_Name FROM NA_Offer Natural Join Resturant";
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
                        Try Value: Glacier National Park, and it will return the resturants locate in the park
                        <hr> 
                        <small>Empty Input will return all resturants in all natural attractions</small>
                    </h1>
                </div>
            </div>
        </div>
        
        <div class="container" >
            <form action="get_na_resturant.php" method="post">
                <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                    <input type="text" name="valueToSearch" class="form-control" placeholder="Value to Search" >
                </div>      
                <input type="submit" name="search" value="Filter" ><br><br>
                </div>
            </form>
        
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Num</th>
                    <th>Star</th>
                    <th>Natural Attractions</th>
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
