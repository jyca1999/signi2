<? include ("Session.php"); ?>

<?

$_POST['id']=null;
$_POST['pw']=null;
  echo $_SESSION['id']."=sessionId ".$_SESSION['pw']."=sessionPw ".$_SESSION['cid']."=sessionCid ".$_SESSION['cpw']."=sessionCpw";
session_destroy();
echo "<meta http-equiv='refresh' content='0; url=/index.php'>";

?>
