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
  <link rel="stylesheet" type="text/css" href="/plantDropDown.css">
  <link rel="stylesheet" type="text/css" href="/stone/stone.css">


  <script>
    function chk_frm(){

      if(!document.search.stoneNameK.value && !document.search.stoneNameE.value){
       window.alert('검색 내용을 입력해 주세요');
       return false;
      }

    return true;
    }

  </script>  <meta charset="utf-8">
    <title>Signi - 광물 검색</title>
  </head>
  <body>
    <div class="container dropDown" id="top">

      <ul class="list-inline" id="topNav">
        <li id="title">
          <a href="/">Signi</a>
        <li>
        <li id="topNavli">
          <a id="unSelect" href="/plant.php">Plant</a>
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
          <a id="unSelect" href="/suggestion.php">Suggestion</a>
          <ul id="topNavDrop">
            <li>
              <a href="/suggestion/suggestionContent.php">Content</a>
            </li>
            <li>
              <a href="/suggestion/suggestionError.php">Error</a>
            </li>
          </ul>
        </li>
        <li id="topNavliSearch">
          <a href="/plant/plantSearch.php">Search</a>
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

    <div class="container" id="search">
      <form class="form-horizontal" action="/stone/forStoneSearch.php" method="post" onsubmit="return chk_frm()" name="search">
      <div class="form-group">
        <label for="stoneNameK">한글 표기</label>
        <input type="text" class="form-control" id="stoneNameK" name="stoneNameK" placeholder="이름을 입력해 주세요.">
        <br>
        <label for="stoneNameE">영어 표기</label>
        <input type="text" class="form-control" id="stoneNameE" name="stoneNameE" placeholder="Please enter the name">
      </div>
      <p style="color:red; font-size:15px;" class="col-sm-9" float="left">
        띄어쓰기는 지원하지 않습니다
      </p>
      <br>
      <br>
      <br>
      <input class="btn btn-default" type="submit" value="Submit">
    </form>

    </div>


  <div class="container" id="footerMain">
  <p>
    ⓒ 2016. 차주영 all rights reserved.
  </p>
</div>
</body>
</html>
