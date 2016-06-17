<?PHP

$user_name = "mzada";
$password = "mzada720";
$database = "haraj_hobrt1";
$server = "127.0.0.1";

$mysqli = new mysqli($server, $user_name, $password, $database);

/*
 * This is the "official" OO way to do it,
 * BUT $connect_error was broken until PHP 5.2.9 and 5.3.0.
 */
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
} else {
    print "Connection to the Server opened";
}

?>