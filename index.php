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

//Variables: school, category, query

$stmt->bindParam(":search_content", $search_content);

$school = $_GET['school'];
$category = $_GET['category'];
$query = $_GET['query'];

if($query == '' || $category == ''){
    $stmt = $pd->prepare("SELECT * FROM Courses ORDER BY date_posted DESC");
}
else{
    $stmt = $pd->prepare("SELECT * FROM Courses WHERE course_name LIKE '%' || :query || '%' OR professor LIKE '%' || :query || '%'");
    $stmt->bindParam(":query", $query);
}

$stmt->execute() or die("Failure");
$result = $stmt->fetchAll();

foreach($result as $line){
    echo $result;
}

echo $school;
echo $category;
echo $query;

?>
</html>
