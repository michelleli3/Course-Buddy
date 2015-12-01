<html>
<title>API Endpoint</title>
<?php

ini_set('display_errors', 'On');

function connectToDB(){
    $HOST =  "ec2-54-83-202-64.compute-1.amazonaws.com";
    $USER = "zuobdlxluumpis";
    $DB_NAME = "d2mqvhpnk9d76a";
    $DB_PASSWORD = "73LpwpOouyrE1-gVbZJBlLhr8P";
    $pd = new PDO("pgsql:dbname=$DB_NAME; host=$HOST", $USER, $DB_PASSWORD) or die("Could not connect");
    return $pd;
}

$connection = connectToDB();

$school = $_GET['school'];
$query = $_GET['query'];

$stmt = "";
if($query == ''){
    echo "EMPTY";
    $stmt = $connection ->prepare("SELECT (course_name, professor, semesters_offered) FROM Courses");
}
else{
    $stmt = $connection ->prepare("SELECT (course_name, professor, semesters_offered) FROM Courses WHERE course_name LIKE '%' || :query || '%' OR professor LIKE '%' || :query || '%'");
    $stmt->bindParam(":query", $query);
}

$stmt->execute() or die("Failure");
$results = $stmt->fetchAll();

foreach($results as $row){
    echo "<br>";
    echo $row[0];
}

?>
</html>
