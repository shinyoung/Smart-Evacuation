<html>
<body>
  <form name=index method=post action="./index.html">
  <?php
  $_POST["age"];
  $connect = mysql_connect('localhost','smartev','asdf1234');
  $db = mysql_select_db('smartev', $connect);
  if(!$db)
  {
    error("No Database<br>");
    exit;
  }

  $query = "insert into PEOPLE values(null,'".$_POST["name"]."', ".$_POST["age"].", '".$_POST["sex"]."', '".$_POST["defect"]."', null)";



  $result = mysql_query($query, $connect);
  if($result) echo "<meta http-equiv='refresh' content='0; url=http://smartev.dothome.co.kr/WebContent/building.html'>";
  else echo "Input Failed<br>";
  echo "<hr>";
  ?>
  <input type=submit value="Back">
  </form>
</body>
</html>
