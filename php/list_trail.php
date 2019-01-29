<?php

// Connection parameters 
$host = 'mpcs53001.cs.uchicago.edu';
$username = 'zhc008';
$password = 'voh9eiHo';
$database = $username.'DB';

// Attempting to connect 
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());
print 'Connected successfully!<br>';

// Selecting a database
//   Unnecessary in this case because we have already selected 
//   the right database with the connect statement.  
mysqli_select_db($dbcon, $database)
   or die('Could not select database');
print 'Selected database successfully!<br>';

// Listing tables in your database
$query = 'SELECT * FROM Hiking_Trail';
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error());

print "The Natural Attractions in $database database are:<br>";
$table = '<table border="1" cellpadding="10">';
// Printing table names in HTML
print '<ul>';
$table .= '<tr><td>' . 'Name' . '</td>';
$table .= '<td>' . 'Natural Attraction' . '</td>';
$table .= '<td>' . 'Distance' . '</td>';
$table .= '<td>' . 'Average Time Cost' . '</td>';
while ($tuple = mysqli_fetch_row($result)) {
    $table .= '<tr><td>' . $tuple[0] . '</td>';
    $table .= '<td>' . $tuple[1] . '</td>';
    $table .= '<td>' . $tuple[2] . '</td>';
    $table .= '<td>' . $tuple[3] . '</td>';
}
$table .= '</tr></table>';
echo $table;
print '</ul>';

// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?>