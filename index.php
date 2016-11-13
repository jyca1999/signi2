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
    	<link rel="stylesheet" type="text/css" href="MainStyle.css">
      <link rel="stylesheet" type="text/css" href="mainDropDown.css">

      <meta charset="utf-8">
      <title>Signi</title>
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
    <?if($_SESSION['USDI']==$_SESSION['USDIC'] && $_SESSION['USWP']==$_SESSION['USWPC']&&$_SESSION['USDI']!=null&&$_SESSION['USWP']!=null) { ?>
   <a href="/logout.php">Log-Out</a>
  <?} else {?>
  <a href="/logIn.php">Log-In</a>
  <? } ?>
  <? } ?>
          <? } ?>
        </li>
      </ul>

    </div>
    </div>
    <div class="container" id="main">
        <img src="a_sakura-wallpaper.jpg" class="img-responsive center-block mainPic"/>
    </div>
    <div class="container" id="mainSub">
      <img src="main-3.png" class="img-responsive center-block mainSubPic"/>
    </div>
  <div class="container" id="footerMain">
  <p>
    ⓒ 2016. 차주영 all rights reserved.
  </p>
</div>
</body>
</html>
