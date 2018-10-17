<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbname = getenv("DATABASE_NAME");
$dbpwd = getenv("DATABASE_PASSWORD");

$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));

$query = "SELECT * from users" or die("Error in the consult.." . mysqli_error($connection));
echo "<img src=redhat-azure.png /><br>";
echo "用户列表Here is the list of users: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo "用户Id: ".$row['user_id'] . " 用户名: " . $row['username'] . "<br>";
}
echo "End of the list <br>";

mysqli_close($connection);

?>
