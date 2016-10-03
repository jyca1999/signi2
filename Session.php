

<?

    session_start();



    $con=mysqli_connect("localhost", "signi2", "Aa0a829**", "signi2");  //DB연결

    if (mysqli_connect_error())

    {

        echo "Fail to connect DB" . mysqli_connect_error(); //DB실패할경우 실패메시지 출력

    }




    $user_check=$_SESSION['cid'];    //세션 uid를 받아서

    echo $user_check;

    $ses_sql=mysqli_query($con, "select id from member where id='$user_check' ");

    $row=mysqli_fetch_array($ses_sql);

    $login_session=$row['id'];  // 넘어온 값이 db에 있는 지 확인 후



    if(!isset($login_session))  // 값이 비었다면 Login 페이지로 이동시킵니다. Session.php를 각 페이지에 include 시킴으로써 세션 구현

    {
        //echo $_SESSION['id']."=sessionId ".$_SESSION['pw']."=sessionPw ".$_SESSION['cid']."=sessionCid ".$_SESSION['cpw']."=sessionCpw".$user_check."=user_check";

      //  echo "<meta http-equiv='refresh' content='0; url=/logIn.html'>";

    }





?>
