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
    $attraction = $_POST['attraction'];
    $score = $_POST['star'];
    $comment = $_POST['comment'];
    // search in all table columns
    // using concat mysql function
    if (!empty($_SESSION["username"])){
        $user = $_SESSION["username"];
        $query = "INSERT INTO Comment (Username, Attraction, Star, Comment) 
  			VALUES('$user', '$attraction', '$score','$comment')";
    }else{
        $query = "INSERT INTO Comment (Username, Attraction, Star, Comment) 
  			VALUES('Guest', '$attraction', '$score','$comment')";
    }

    mysqli_query($dbcon, $query);
    $query1 = "SELECT Username, Attraction, Star, Comment
            FROM Comment ORDER BY ID DESC LIMIT 10";
    $search_result = filterTable($query1);
   
}
 else {
    $query = "SELECT Username, Attraction, Star, Comment
            FROM Comment ORDER BY ID DESC LIMIT 10";
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

