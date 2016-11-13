<? session_start();


header("Content-Type: text/html; charset=UTF-8");


      $connect = mysql_connect('localhost','signi2','Aa0a829**');
      mysql_select_db('signi2');

      if (mysqli_connect_error())

      {
          echo "Fail to connect DB".mysqli_connect_error(); //DB실패할경우 실패메시지 출력
      }



    $uid = $_POST['user_id'];    // uid, 로그인창에서 입력한 아이디 값 받기

    $upwd = $_POST['pw'];  // upwd, 로그인창에서 입력한 비밀번호 값 받기



    $sql = "select * from member where id = '$uid' and password = '$upwd'";   //DB에서 아이디값과 비밀번호가 동일한


    $result=mysql_query($sql);
    $count=mysql_num_rows($result);


//    $result = mysql_query($con,$sql);

                                 //데이터를 찾아서

  //  $count=mysql_num_rows($result);                                                                 //몇개의 데이터가 반환되었는지 확인



    if($count==1) {       //아이디는 marryme이고 패스워드는 1111


        $_SESSION["USDI"] = $uid;
        $_SESSION["USWP"] = $upwd;
        $_SESSION["USDIC"] = $uid;
        $_SESSION["USWPC"] = $upwd;


        //          echo $_SESSION['id']."=sessionId ".$_SESSION['pw']."=sessionPw ".$_SESSION['cid']."=sessionCid ".$_SESSION['cpw']."=sessionCpw";
         echo "<meta http-equiv='refresh' content='0; url=/index.php'>";

                                                                                         //아이디와 패스워드가 일치할 경우 위 페이지로 이동.

     } else {

         echo '<script type = "text/javascript">alert("아이디나 패스워드를 잘못입력하셨습니다.")</script> ';

         echo "<meta http-equiv='refresh' content='0; url=/logIn.php'>";

                                                                                         //아이디와 패스워드가 일치지 않을 경오 경고창을 띄우고 위 페이지로 이동.

     }

?>
