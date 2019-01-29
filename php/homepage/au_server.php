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
$user = $_SESSION["username"];

$query = "SELECT Email,Add1,Add2,Birthday,Phone,Nickname
            FROM Registration
            WHERE Username = '$user';";
$result = mysqli_query($dbcon, $query)
  or die('Show tables failed: ' . mysqli_error());
$row = mysqli_fetch_array($result);
$email = $row[0];
$address1 = $row[1];
$address2 = $row[2];
$birthday = $row[3];
$phone = $row[4];
$nickname = $row[5];
$_SESSION["email"] = $email;
$_SESSION["birthday"] = $birthday;
$_SESSION["address1"] = $address1;
$_SESSION["address2"] = $address2;
$_SESSION["phone"] = $phone;
$_SESSION["nickname"] = $nickname;

// Printing table names in HTML
print '<ul>';
while ($tuple = mysqli_fetch_row($result)) {
   print '<li>'.$tuple[0].'</li>';
}
if(isset($_POST['nick_sub']))
{
    $user = $_SESSION["username"];
    $nickname = mysqli_real_escape_string($dbcon, $_POST['nickname']);
    // search in all table columns
    // using concat mysql function
    $query = "Update Registration
                SET Nickname = '$nickname'
                WHERE Username = '$user';";  
    $_SESSION["nickname"] = $nickname;
    mysqli_query($dbcon, $query);
}
if(isset($_POST['email_sub']))
{
    $user = $_SESSION["username"];
    $email = mysqli_real_escape_string($dbcon, $_POST['email']);
    // search in all table columns
    // using concat mysql function
    $query = "Update Registration
                SET Email = '$email'
                WHERE Username = '$user';";  
    $_SESSION["email"] = $email;
    mysqli_query($dbcon, $query);
}
if(isset($_POST['birthday_sub']))
{
    $user = $_SESSION["username"];
    $birthday = mysqli_real_escape_string($dbcon, $_POST['birthday']);
    // search in all table columns
    // using concat mysql function
    $query = "Update Registration
                SET Birthday = '$birthday'
                WHERE Username = '$user';";  
    $_SESSION["birthday"] = $birthday;
    mysqli_query($dbcon, $query);
}
if(isset($_POST['address1_sub']))
{
    $user = $_SESSION["username"];
    $address1 = mysqli_real_escape_string($dbcon, $_POST['address1']);
    // search in all table columns
    // using concat mysql function
    $query = "Update Registration
                SET Add1 = '$address1'
                WHERE Username = '$user';";  
    $_SESSION["address1"] = $address1;
    mysqli_query($dbcon, $query);
}
if(isset($_POST['address2_sub']))
{
    $user = $_SESSION["username"];
    $address2 = mysqli_real_escape_string($dbcon, $_POST['address2']);
    // search in all table columns
    // using concat mysql function
    $query = "Update Registration
                SET Add2 = '$address2'
                WHERE Username = '$user';";  
    $_SESSION["address2"] = $address2;
    mysqli_query($dbcon, $query);
}
if(isset($_POST['phone_sub']))
{
    $user = $_SESSION["username"];
    $phone = mysqli_real_escape_string($dbcon, $_POST['phone']);
    // search in all table columns
    // using concat mysql function
    $query = "Update Registration
                SET Phone = '$phone'
                WHERE Username = '$user';";  
    $_SESSION["phone"] = $phone;
    mysqli_query($dbcon, $query);
}




    $query = "SELECT Username, Attraction, Star, Comment
            FROM Comment ORDER BY ID DESC LIMIT 10";
    $search_result = filterTable($query);


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
