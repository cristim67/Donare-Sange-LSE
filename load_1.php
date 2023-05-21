<?php

//load.php


$connect = new PDO('mysql:host=localhost;dbname=u824022186_calendar', 'root', ' ');

$data = array();

$query = "SELECT * FROM events WHERE calendar_n='1' ORDER BY id ";

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

//Fiecare load
//Insert
//Connection.php
//Fiecare fisier, etc