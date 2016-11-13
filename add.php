<?session_start();?>
<?php

 $id = $_SESSION['USDI'];
 $password = $_SESSION['USWP'];
 $title = $_POST['csTitle'];
 $content = $_POST['csWrite'];

 $connect = mysql_connect('localhost','signi2','Aa0a829**');
 mysql_select_db('signi2');


 $query = "insert into ContSug (`writer`,`password`,`title`,`content`) values('$id','$password','$title','$content')";
 mysql_query($query, $connect);
 mysql_close($connect);

 //echo $_POST['user_id'];
 echo "<meta http-equiv='refresh' content='0; url=/suggestion.php'>";

?>
