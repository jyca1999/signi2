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
  <link rel="stylesheet" type="text/css" href="/stoneDropDown.css">
  <link rel="stylesheet" type="text/css" href="/stone/stone.css">
  <?
  $name=$_GET[name];
  mysql_query("SET NAMES utf8");
  ?>
  <meta charset="utf-8">
    <title><? echo $name?></title>
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
          <a id="unSelect" href="/plant/plantSearch.php">Search</a>
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
    <div class="container" id="stoneMain">
      <?php
            //error_reporting(E_ALL);
            //ini_set("display_errors", 1);
              $connect = mysql_connect('localhost','signi2','Aa0a829**');
              mysql_select_db('signi2');
              $sql="select * from `stone` where name='$name'";
              $result = mysql_query($sql);
              //$result = mysql_result($result, 0);
            //  $row = mysql_fetch_array($result);
            ?>
              <?php
              $connect = mysql_connect('localhost','signi2','Aa0a829**');
              mysql_select_db('signi2');
              $sql="select * from `stone` where name='$name'";
              $result = mysql_query($sql);
              while($row = mysql_fetch_assoc($result)){
              $name = $row['name'];
              $root = $row['root'];
              echo ".$root.";
              }
              ?>
            <div class="container" id="stoneMainTextTitle">
              <ul>
                <li id="stoneMainTextTitleKor">
                <?php
                $connect = mysql_connect('localhost','signi2','Aa0a829**');
                mysql_select_db('signi2');
                $sql="select * from `stone` where name='$name'";
                $result = mysql_query($sql);
                while($row = mysql_fetch_assoc($result)){
                $name = $row['name'];
                echo $name;
                }
                ?>
                </li>
                <li id="stoneMainTextTitleEng">
                  <?php
                  $connect = mysql_connect('localhost','signi2','Aa0a829**');
                  mysql_select_db('signi2');
                  $sql="select * from `stone` where name='$name'";
                  $result = mysql_query($sql);
                  while($row = mysql_fetch_assoc($result)){
                  $urlName = $row['urlName'];
                  echo $urlName . "<br>";
                  }
                                  ?>
                </li>
              </ul>


            </div>
            <div class="container" id="stoneMainText">
              <?php

              $connect = mysql_connect('localhost','signi2','Aa0a829**');
              mysql_select_db('signi2');
              $sql="select * from `stone` where name='$name'";
              $result = mysql_query($sql);

                while($row = mysql_fetch_assoc($result)){
                $mean = $row['mean'];
                $urlName = $row['urlName'];
                $color = $row['color'];
                $repColor = $row['repColor'];
                $storyChe = $row['storyChe'];
                $storyUrl = $row['storyUrl'];
                $category = $row['category'];
                $anoName = $row['anoName'];
                $celeCheck = $row['celeCheck'];
                $celebrate = $row['celebrate'];
                $anoNaChe = $row['anoNaChe'];
                if ($anoNaChe=='true') {
                  echo "• 다른 이름 : " . $anoName . "<br>";
                }
                else{

                }
                echo "• 분류 : " . $category . "<br>";
                echo "• 의미 : " . $mean . "<br>";
                echo "• 대표적인 색 : " . $color . "<br>";
                echo "• 색 : " . $color . "<br>";
                if ($celeCheck=='true') {
                  echo "• ";
                  echo $celebrate;
                }
                else{

                }
                echo "<br><br>";
                if ($storyChe=='true') {
                  echo "* ";
                  echo ".$storyUrl.";
                }
                else{

                }

                }
        ?>

            </div>
    </div>
  <div class="container" id="footerMain">
  <p>
    ⓒ 2016. 차주영 all rights reserved.
  </p>
</div>
</body>
</html>
