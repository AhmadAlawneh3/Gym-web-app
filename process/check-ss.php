<?php
// Start or resume a session
session_start();

// Connect to the database
$db = mysqli_connect('localhost', 'root', 'alawneh', 'myCenter');

// Check if a session ID cookie is present
if (isset($_COOKIE['PHPSESSID'])) {

    // Retrieve the session ID from the cookie
    // $session = $_COOKIE['PHPSESSID'];

    // Retrieve the corresponding session data from the database
    $query = "SELECT session FROM sessions WHERE id = $_SESSION[id]";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);

    // Check if the session data contains the expected user information
    if ($row['session'] == $_COOKIE['PHPSESSID'] ) {
        // echo "Welcome, JohnDoe! You are logged in as an admin.";
        echo $_SESSION['id'],'<br>';
        echo $_COOKIE['PHPSESSID'],'<br>';
        echo $row['session'];

    } else {
        // echo "Access denied. Please log in as an admin.";
        header('Location: /process/login.php');
        echo $_SESSION['id'];
        echo $row['session'];
        echo $_COOKIE['PHPSESSID'];
    }

} else {
    // echo "Access denied. Please enable cookies and log in as an admin.";
    header('Location: /process/login.php');
    
}
// Close the database connection
mysqli_close($db);

?>