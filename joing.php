<? session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    		<!-- 합쳐지고 최소화된 최신 CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    	<!-- 부가적인 테마 -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    	<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="/MainStyle.css">
      <link rel="stylesheet" type="text/css" href="/mainDropDown.css">
      <link rel="javascript" href="/css/master.css" media="screen" title="no title" charset="utf-8">

      <script>

       function chk_frm(){

         if(!document.join.user_id.value){
          window.alert('아이디를 입력해 주세요');
          document.join.user_id.focus();
          return false;
         }

         if(!document.join.pw.value){
          window.alert('비밀번호를 입력해 주세요');
          document.join.pw.focus();
          return false;
         }

         if(!document.join.email.value){
          window.alert('이메일을 입력해 주세요');
          document.join.email.focus();
          return false;
         }

       }


      function checkID()
      {
      window.open("/check_id.php?id="+document.join.user_id.value,
      "IDcheck", "left=200, top=200, width=250, height=100 , scrollbars=no, resizable=yes");


      }

      </script>


      <meta charset="utf-8">
      <title>Signi - 회원가입</title>
  </head>
  <body>
    <div class="container dropDown" id="top">

      <ul class="list-inline" id="topNav">
        <li id="title">
          <a href="/main.php">Signi</a>
        <li>
        <li id="topNavli">
          <a href="/plant.php">Plant</a>
          <ul id="topNavDrop">
            <li style="margin-right:10px;">
              <a href="/plant/plantSpring.php">Spring</a>
            </li>
            <li>
              <a href="/plant/plantSummer.php">Summer</a>
            </li>
            <li>
              <a href="/plant/plantAutume.php">Autume</a>
            </li>
            <li>
              <a href="/plant/plantWinter.php">Winter</a>
            </li>
          </ul>
        </li>
        <li id="topNavli">
          <a href="/stone.php">Stone</a>
          <ul id="topNavDrop">
            <li style="padding-left:35px;">
              <a href="/stone/stoneRed.php">Red</a>
            </li>
            <li>
              <a href="/stone/stoneYellow.php">Yellow</a>
            </li>
            <li>
              <a href="/stone/stoneGreen.php">Green</a>
            </li>
            <li>
              <a href="/stone/stoneBlue.php">Blue</a>
            </li>
            <li>
              <a href="/stone/stoneViolet.php">Violet</a>
            </li>
            <li>
              <a href="/stone/stoneWhite.php">White</a>
            </li>
            <li>
              <a href="/stone/stoneBlack.php">Black</a>
            </li>
          </ul>
        </li>
        <li id="topNavli">
          <a href="/suggestion.php">Suggestion</a>
          <ul id="topNavDrop">
            <li>
              <a href="/suggestion/suggestionContent.php">Content</a>
            </li>
            <li>
              <a href="/suggestion/suggestionError.php">Error</a>
            </li>
          </ul>
        </li>
        <li id="join">
          <a href="/joing.php">Join</a>
        </li>

        <li id="join">
            <?if($_SESSION['USDI']==$_SESSION['USDIC'] && $_SESSION['USWP']==$_SESSION['USWPC']&&$_SESSION['USDI']!=null&&$_SESSION['USWP']!=null) { ?>
   <a href="/logout.php">Log-Out</a>
  <?} else {?>
    <?if($_SESSION['USDI']==$_SESSION['USDIC'] && $_SESSION['USWP']==$_SESSION['USWPC']&&$_SESSION['USDI']!=null&&$_SESSION['USWP']!=null) { ?>
   <a href="/logout.php">Log-Out</a>
  <?} else {?>
  <a href="/logIn.php">Log-In</a>
  <? } ?>
  <? } ?>
        <li>
      </ul>

    </div>
    </div>

    <div class="container" id="loginPanel">
      <form class="form-horizontal" action="/join.php" method="post" onsubmit="return chk_frm()" name="join">
        <div class="form-group">
          <label for="inputId" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputId" name="user_id" placeholder="아이디">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="col-sm-3 control-label">Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control" id="inputPassword" name="pw" placeholder="Password">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEMail" class="col-sm-3 control-label">E-Mail</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" id="inputEMail" name="email" placeholder="E-Mail">
          </div>
        </div>
        <div class="form-group">
          <label for="inputName" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
          </div>
        </div>
        <div class="col-sm-3">
        </div>
        <p style="color:red; font-size:15px;" class="col-sm-9">
          *이메일과 비밀번호는 아이디와 이메일을 찾을 때 사용되오니 정확한 기입 부탁드립니다.
        </p>
        <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-info">회원가입</button>
          </div>
        </div>
      </form>

    </div>

    <div class="container" id="footerMain">

    </div>
  <div class="container" id="footerMain">
  <p>
    ⓒ 2016. 차주영 all rights reserved.
  </p>
</div>
</body>
</html>
