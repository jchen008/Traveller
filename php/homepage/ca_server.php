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
    $city = $_POST['city'];
    $ca = $_POST['ca'];
    // search in all table columns
    // using concat mysql function

    if ($country != ''){
        if ($city != ''){
            // fill: country, city, ca
            if ($ca != ''){
                $query = "SELECT n1.CA_Name, ROUND(AVG(Year_Built)) AS Year, City, Country_Name, Review
                    FROM Cultural_Attractions n1, Tourist_Spot n2, Building n3
                    WHERE n1.TS_ID = n2.TS_ID AND n1.CA_Name = n3.CA_Name AND n1.CA_Name = '$ca' AND n1.City = '$city' AND n2.Country_Name = '$country'
                    GROUP BY n1.CA_Name";
            }
            // fill: country, city | empty: ca
            else{
                $query = "SELECT n1.CA_Name, ROUND(AVG(Year_Built)) AS Year, City, Country_Name, Review
                    FROM Cultural_Attractions n1, Tourist_Spot n2, Building n3
                    WHERE n1.TS_ID = n2.TS_ID AND n1.CA_Name = n3.CA_Name AND n1.City = '$city' AND n2.Country_Name = '$country'
                    GROUP BY n1.CA_Name";
            }
        }
        else{
            // fill: country, ca| empty: city
            if ($ca != ''){
                $query = "SELECT n1.CA_Name, ROUND(AVG(Year_Built)) AS Year, City, Country_Name, Review
                    FROM Cultural_Attractions n1, Tourist_Spot n2, Building n3
                    WHERE n1.TS_ID = n2.TS_ID AND n1.CA_Name = n3.CA_Name AND n1.CA_Name = '$ca' AND n2.Country_Name = '$country'
                    GROUP BY n1.CA_Name";
            }
            // fill: country | empty: city, ca
            else{
                $query = "SELECT n1.CA_Name, ROUND(AVG(Year_Built)) AS Year, City, Country_Name, Review
                    FROM Cultural_Attractions n1, Tourist_Spot n2, Building n3
                    WHERE n1.TS_ID = n2.TS_ID AND n1.CA_Name = n3.CA_Name AND n2.Country_Name = '$country'
                    GROUP BY n1.CA_Name";
            }
        }
    }
    else{   
        if ($city != ''){
            // fill: city, ca | empty: country
            if ($ca != ''){
                $query = "SELECT n1.CA_Name, ROUND(AVG(Year_Built)) AS Year, City, Country_Name, Reveiw
                    FROM Cultural_Attractions n1, Tourist_Spot n2, Building n3
                    WHERE n1.TS_ID = n2.TS_ID AND n1.CA_Name = n3.CA_Name AND n1.CA_Name = '$ca' AND n1.City = '$city'
                    GROUP BY n1.CA_Name";
            }
            // fill: city | empty: country, ca
            else{
                $query = "SELECT n1.CA_Name, ROUND(AVG(Year_Built)) AS Year, City, Country_Name, Review
                    FROM Cultural_Attractions n1, Tourist_Spot n2, Building n3
                    WHERE n1.TS_ID = n2.TS_ID AND n1.CA_Name = n3.CA_Name AND n1.City = '$city' 
                    GROUP BY n1.CA_Name";
            }
        }
        else{
            // fill: ca| empty: country, city
            if ($ca != ''){
                $query = "SELECT n1.CA_Name, ROUND(AVG(Year_Built)) AS Year, City, Country_Name, Review
                    FROM Cultural_Attractions n1, Tourist_Spot n2, Building n3
                    WHERE n1.TS_ID = n2.TS_ID AND n1.CA_Name = n3.CA_Name AND n1.CA_Name = '$ca'
                    GROUP BY n1.CA_Name";
            }
            // empty: country, city, ca
            else{
                $query = "SELECT n1.CA_Name, ROUND(AVG(Year_Built)) AS Year, City, Country_Name, Review
                    FROM Cultural_Attractions n1, Tourist_Spot n2, Building n3
                    WHERE n1.TS_ID = n2.TS_ID AND n1.CA_Name = n3.CA_Name
                    GROUP BY n1.CA_Name";
            }
        }
    }
    $search_result = filterTable($query);
   
}
 else {
    $query = "SELECT n1.CA_Name, ROUND(AVG(Year_Built)) AS Year, City, Country_Name, Review
                    FROM Cultural_Attractions n1, Tourist_Spot n2, Building n3
                    WHERE n1.TS_ID = n2.TS_ID AND n1.CA_Name = n3.CA_Name
                    GROUP BY n1.CA_Name;";
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

