<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=u824022186_calendar', 'root', ' ');

if(isset($_POST["title"]))
{
 $email=$_SESSION["email"];
       $email_check = "SELECT * FROM events WHERE title = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
      
    }
    else{
 $query = "
 INSERT INTO events 
 (title, start_event, end_event,calendar_n) 
 VALUES (:title, :start_event, :end_event, :calendar_n)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
    ':calendar_n' => $_POST['calendar']
  )
 );
  
    }
 
}


?>