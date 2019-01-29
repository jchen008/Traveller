<?php

// Connection parameters 
$host = 'cspp53001.cs.uchicago.edu';
$username = 'zhc008';
$password = 'voh9eiHo';
$database = $username.'DB';

// Attempting to connect
$dbcon = mysqli_connect($host, $username, $password, $database)
   or die('Could not connect: ' . mysqli_connect_error());
print 'Connected successfully!<br>';

// Getting the input parameter (user):
$user = $_REQUEST['user'];

// Get the attributes of the user with the given username
$query = "SELECT * FROM Country WHERE Country_Name = '$user'";
$result = mysqli_query($dbcon, $query)
  or die('Query failed: ' . mysqli_error($dbcon));

// Can also check that there is only one tuple in the result
$tuple = mysqli_fetch_array($result)
  or die("User $user not found!");

print "Country <b>$user</b> has the following attributes:";

// Printing user attributes in HTML

print '<ul>';  
print '<li> Country: '.$tuple['Country_Name'];
print '<li> Population: '.$tuple['Population'];
print '</ul>';


// Free result
mysqli_free_result($result);

// Closing connection
mysqli_close($dbcon);
?> 