<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<?

    $id=$_GET[id];

    $check = false;


    if(!$id)
    {
        echo("아이디를 입력하세요.");
    }

    else
    {
        $connect = mysql_connect('localhost','signi2','Aa0a829**');
        mysql_select_db('signi2');

        $sql="select * from `member` where id='$id'";


        $result=mysql_query($sql);
        $num_record=mysql_num_rows($result);

         if($num_record)
         {
             echo "아이디가 중복됩니다.<br>";
             echo "다른 아이디를 사용하세요.<br>";
             $query = "insert into check(`check`) values('false')";
             mysql_query($query, $connect);
             mysql_close($connect);
          }

          else
          {
              echo "사용가능한 아이디 입니다.";
              $query = "insert into check(`check`) values(true)";
              mysql_query($query, $connect);
              mysql_close($connect);
           }




    mysql_close();

    }


?>
