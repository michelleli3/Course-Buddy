<html>
<title>API Endpoint</title>
<?php

function connectToDB(){
    $HOST =  "ec2-54-83-202-64.compute-1.amazonaws.com";
    $USER = "zuobdlxluumpis";
    $DB_NAME = "d2mqvhpnk9d76a";
    $DB_PASSWORD = "73LpwpOouyrE1-gVbZJBlLhr8P";
    $pd = new PDO("pgsql:dbname=$DB_NAME; host=$HOST", $USER, $DB_PASSWORD) or die("Could not connect");
    return $pd;
}

$connection = connectToDB();
//$stmt = $pd->prepare("SELECT * FROM posts ORDER BY date_posted DESC");

//Variables: school, category, query

$school = $_GET['school'];
$category = $_GET['category'];
$query = $_GET['query'];

?>
</html>
