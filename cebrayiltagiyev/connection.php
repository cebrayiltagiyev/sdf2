

<? 
$server = "localhost";
$username = "root";
$password = "123";
$dbname = "cebi";

$con = new mysqli($server, $username, $password, $dbname);


if ($con) 
{
	echo "Ok";
}

else 
{
	 die("Connection failed: " . $con->connect_error);
}

?>
