<?php

//load.php

$servername = "localhost";
$username = "root";
$password = " ";



$connect = new PDO("mysql:host=$servername;dbname=u824022186_calendar", $username, $password);

$data = array();

$query = "SELECT * FROM events WHERE calendar_n='4' ORDER BY id ";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);

?>