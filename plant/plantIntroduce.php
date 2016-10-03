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
  <link rel="stylesheet" type="text/css" href="/plant/plant.css">
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
          <a href="/plant.html">Plant</a>
          <ul id="topNavDrop">
            <li style="margin-right:10px;">
              <a href="/plant/plantSpring.html">Spring</a>
            </li>
            <li>
              <a href="/plant/plantSummer.html">Summer</a>
            </li>
            <li>
              <a href="/plant/plantAutume.html">Autume</a>
            </li>
            <li>
              <a href="/plant/plantWinter.html">Winter</a>
            </li>
          </ul>
        </li>
        <li id="topNavli">
          <a id="unSelect" href="/stone.html">Stone</a>
          <ul id="topNavDrop">
            <li style="padding-left:35px;">
              <a href="/stone/stoneRed.html">Red</a>
            </li>
            <li>
              <a href="/stone/stoneYellow.html">Yellow</a>
            </li>
            <li>
              <a href="/stone/stoneGreen.html">Green</a>
            </li>
            <li>
              <a href="/stone/stoneBlue.html">Blue</a>
            </li>
            <li>
              <a href="/stone/stoneViolet.html">Violet</a>
            </li>
            <li>
              <a href="/stone/stoneWhite.html">White</a>
            </li>
            <li>
              <a href="/stone/stoneBlack.html">Black</a>
            </li>
          </ul>
        </li>
        <li id="topNavli">
          <a id="unSelect" href="/suggestion.html">Suggestion</a>
          <ul id="topNavDrop">
            <li>
              <a href="/suggestion/suggestionContent.html">Content</a>
            </li>
            <li>
              <a href="/suggestion/suggestionError.html">Error</a>
            </li>
          </ul>
        </li>
        <li id="topNavliSearch">
          <a id="unSelect" href="/plant/plantSearch.html">Search</a>
        </li>
        <li id="join">
          <a href="/joing.html">Join</a>
        </li>

        <li id="join">
          <a href="/logIn.html">Log-In</a>
        <li>
      </ul>

    </div>
    <div class="container" id="plantMain">
      <?php
            //error_reporting(E_ALL);
            //ini_set("display_errors", 1);
              $connect = mysql_connect('localhost','signi2','Aa0a829**');
              mysql_select_db('signi2');
              $sql="select * from `flower` where name='$name'";
              $result = mysql_query($sql);
              //$result = mysql_result($result, 0);
            //  $row = mysql_fetch_array($result);
            ?>
              <?php
              $connect = mysql_connect('localhost','signi2','Aa0a829**');
              mysql_select_db('signi2');
              $sql="select * from `flower` where name='$name'";
              $result = mysql_query($sql);
              while($row = mysql_fetch_assoc($result)){
              $name = $row['name'];
              $root = $row['root'];
              echo ".$root.";
              }
              ?>
            <div class="container" id="plantMainTextTitle">
              <ul>
                <li id="plantMainTextTitleKor">
                <?php
                $connect = mysql_connect('localhost','signi2','Aa0a829**');
                mysql_select_db('signi2');
                $sql="select * from `flower` where name='$name'";
                $result = mysql_query($sql);
                while($row = mysql_fetch_assoc($result)){
                $name = $row['name'];
                echo $name;
                }
                ?>
                </li>
                <li id="plantMainTextTitleEng">
                  <?php
                  $connect = mysql_connect('localhost','signi2','Aa0a829**');
                  mysql_select_db('signi2');
                  $sql="select * from `flower` where name='$name'";
                  $result = mysql_query($sql);
                  while($row = mysql_fetch_assoc($result)){
                  $urlName = $row['urlName'];
                  echo $urlName . "<br>";
                  }
                                  ?>
                </li>
              </ul>


            </div>
            <div class="container" id="plantMainText">
              <?php

              $connect = mysql_connect('localhost','signi2','Aa0a829**');
              mysql_select_db('signi2');
              $sql="select * from `flower` where name='$name'";
              $result = mysql_query($sql);

                while($row = mysql_fetch_assoc($result)){
                $blossom = $row['blossom'];
                $mean = $row['mean'];
                $urlName = $row['urlName'];
                $color = $row['color'];
                $storyChe = $row['storyChe'];
                $storyUrl = $row['storyUrl'];
                $hackName = $row['hackName'];
                $category = $row['category'];
                echo "• 학명 : " . $hackName . "<br>";
                echo "• 분류 : " . $category . "<br>";
                echo "• 개화시기 : " . $blossom . "<br>";
                echo "• 꽃말 : " . $mean . "<br>";
                echo "• 색 : " . $color . "<br>";
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
  </body>
</html>
