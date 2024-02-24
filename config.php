<?php
// Connect to server and select database.
// define('servername', 'sql208.infinityfree.com');
// define('username', 'if0_36020041');
// define('password', 'aGnYvhGVyHY5s');
// define('dbname', 'if0_36020041_guestbook');


define('servername', 'sql105.infinityfree.com');
define('username', 'if0_36043570');
define('password', 'JieZhzr63RTxpzA');
define('dbname', 'if0_36043570_guestbook');

// define('servername', 'localhost');
// define('username', 'root');
// define('password', '');
// define('dbname', 'myhotel');

$objCon = mysqli_connect(servername, username, password, dbname);
// Check connection
if (!$objCon) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Connected successfully";
    // Proceed with your database operations here
}
?>
