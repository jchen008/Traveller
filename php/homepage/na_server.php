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
    $view = $_POST['view'];
    $na = $_POST['na'];
    // search in all table columns
    // using concat mysql function

    if ($country != ''){
        if ($view != ''){
            // fill: country, view, na
            if ($na != ''){
                $query = "SELECT NA_Name, Type_View, Average_Temp, Country_Name, Review
                    FROM Natural_Attractions n1, Tourist_Spot n2
                    WHERE n1.TS_ID = n2.TS_ID AND n1.NA_Name = '$na' AND n1.Type_View = '$view' AND n2.Country_Name = '$country'";
            }
            // fill: country, view | empty: na
            else{
                $query = "SELECT NA_Name, Type_View, Average_Temp, Country_Name, Review
                    FROM Natural_Attractions n1, Tourist_Spot n2
                    WHERE n1.TS_ID = n2.TS_ID AND n1.Type_View = '$view' AND n2.Country_Name = '$country'";
            }
        }
        else{
            // fill: country, na| empty: view
            if ($na != ''){
                $query = "SELECT NA_Name, Type_View, Average_Temp, Country_Name, Review
                    FROM Natural_Attractions n1, Tourist_Spot n2
                    WHERE n1.TS_ID = n2.TS_ID AND n1.NA_Name = '$na' AND n2.Country_Name = '$country'";
            }
            // fill: country | empty: view, na
            else{
                $query = "SELECT NA_Name, Type_View, Average_Temp, Country_Name, Review
                    FROM Natural_Attractions n1, Tourist_Spot n2
                    WHERE n1.TS_ID = n2.TS_ID AND n2.Country_Name = '$country'";
            }
        }
    }
    else{   
        if ($view != ''){
            // fill: view, na | empty: country
            if ($na != ''){
                $query = "SELECT NA_Name, Type_View, Average_Temp, Country_Name, Review
                    FROM Natural_Attractions n1, Tourist_Spot n2
                    WHERE n1.TS_ID = n2.TS_ID AND n1.NA_Name = '$na' AND n1.Type_View = '$view'";
            }
            // fill: view | empty: country, na
            else{
                $query = "SELECT NA_Name, Type_View, Average_Temp, Country_Name, Review
                    FROM Natural_Attractions n1, Tourist_Spot n2
                    WHERE n1.TS_ID = n2.TS_ID AND n1.Type_View = '$view'";
            }
        }
        else{
            // fill: na| empty: country, view
            if ($na != ''){
                $query = "SELECT NA_Name, Type_View, Average_Temp, Country_Name, Review
                    FROM Natural_Attractions n1, Tourist_Spot n2
                    WHERE n1.TS_ID = n2.TS_ID AND n1.NA_Name = '$na'";
            }
            // empty: country, view, na
            else{
                $query = "SELECT NA_Name, Type_View, Average_Temp, Country_Name, Review
                    FROM Natural_Attractions n1, Tourist_Spot n2
                    WHERE n1.TS_ID = n2.TS_ID";
            }
        }
    }
    $search_result = filterTable($query);
   
}
 else {
    $query = "SELECT NA_Name, Type_View, Average_Temp, Country_Name, Review
            FROM Natural_Attractions n1, Tourist_Spot n2
            WHERE n1.TS_ID = n2.TS_ID";
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

