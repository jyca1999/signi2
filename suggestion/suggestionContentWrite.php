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

      <script>

       function chk_frm(){


         if(!document.cs_write.csTitle.value){
          window.alert('제목을 입력해 주세요');
          document.cs_write.csTitle.focus();
          window.alert(check2);
          return false;
         }

         if(!document.cs_write.csWrite.value){
          window.alert('내용을 입력해 주세요');
          document.cs_write.csWrite.focus();
          return false;
         }



       return true;
       }


      function checkID()
      {
      window.open("/check_id.php?id="+document.join.user_id.value,
      "IDcheck", "left=200, top=200, width=250, height=100 , scrollbars=no, resizable=yes");




      }

      </script>
      <meta charset="utf-8">
      <title>Signi - 내용 건의</title>
  </head>
  <body>
    <div class="container dropDown" id="top">

      <ul class="list-inline" id="topNav">
        <li id="title">
          <a href="http://signi2.cafe24.com/">Signi</a>
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
              <a href="/suggestion/suggestionContentWrite.php">Content</a>
            </li>
            <li>
              <a href="/suggestion/suggestionErrorWrite.php">Error</a>
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

    <div class="container" id="writePanel">
      <form class="form-horizontal" action="/add.php" method="post" onsubmit="return chk_frm()" name="cs_write">
        <div class="form-group">
          <label for="writetitle" class="col-sm-3 control-label">제목</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="writeTitle" placeholder="제목" name="csTitle">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="text" class="form-control" id="writeContent" placeholder="여기에 내용을 입력해 주십시오" name="csWrite">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-9">
            <p style="color: red;">
              모든 답변은 가입시에 기입한 이메일로 보내드립니다.
            </p>
          </div>
          <div class="col-sm-1">
            <button type="submit" class="btn btn-default">제출</button>
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
