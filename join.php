<?php

 $id = $_POST['user_id'];
 $password = $_POST['pw'];
 $name = $_POST['name'];
 $email = $_POST['email'];

 $connect = mysql_connect('localhost','signi2','Aa0a829**');
 mysql_select_db('signi2');


 $query = "insert into member(`id`,`password`,`name`,`email`) values('$id','$password','$name','$email')";
 mysql_query($query, $connect);
 mysql_close($connect);

 //echo $_POST['user_id'];
 echo "<meta http-equiv='refresh' content='0; url=http://signi2.cafe24.com/logIn.html'>";

?>
