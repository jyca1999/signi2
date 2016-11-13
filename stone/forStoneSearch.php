<?

header("Content-Type: text/html; charset=UTF-8");

?>
<?php

 $stoneNameK = $_POST['stoneNameK'];
 $stoneNameE = $_POST['stoneNameE'];


 $connect = mysql_connect('localhost','signi2','Aa0a829**');
 mysql_select_db('signi2');

     $sql = "select * from `stone` where urlName = '$stoneNameE' OR name = '$stoneNameK' ";   //DB에서 아이디값과 비밀번호가 동일한
     $result=mysql_query($sql);
     $count=mysql_num_rows($result);

       while($row = mysql_fetch_assoc($result)){
       $name = $row['name'];
       $searchEcho = $row['searchEcho'];

       }


 //    $result = mysql_query($con,$sql);

                                  //데이터를 찾아서

   //  $count=mysql_num_rows($result);                                                                 //몇개의 데이터가 반환되었는지 확인
     if($count>=1) {



          echo $searchEcho;

                                                                                   //아이디와 패스워드가 일치할 경우 위 페이지로 이동.
      } else {
        echo '<script type = "text/javascript">alert("검색결과가 없습니다")</script> ';
        echo "<meta http-equiv='refresh' content='0; url=./stoneSearch.php'>";
      }
?>
