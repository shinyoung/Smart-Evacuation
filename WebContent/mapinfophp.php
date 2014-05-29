<?
  $name4 = $_GET[name];

  $connect = mysql_connect ('localhost', 'smartev', 'asdf1234');
  $db = mysql_select_db('smartev', $connect);
  
  $sql = "select * from STRUCTURE" ;
  $result = mysql_query($sql, $connect);
  $row = mysql_fetch_row($result);

  //sql2는 사람 선택을 위한 것입니다
  $sql2 = "select * from PEOPLE WHERE Name='$name4'";
  //result2는 사람 선택을 위한 것입니다  
  $result2 = mysql_query($sql2, $connect);
  //row2는 사람 선택을 위한 것입니다
  $row2 = mysql_fetch_row($result2);

  //row2는 
  echo " ".$name4."님은 *** $row[0] *** 를 선택하셨습니다.";

?>

<html>
 <head>
  <title>[ 도면 정보 ]</title>
  <style>
    img.q {cursor:help;}
    button {cursor:pointer;}
  </style>
 </head>

 <body>
<script>
  function role(){
   var roles = Array("Your role is Fire Extinguisher", "Please help the children!", "Shouting!","Please guide people to the exit" ,
    "Just follow the guide! somebody will help you!" ,"Don't be panic, Keep Calm and ask for help!");
   var role = roles[Math.floor(Math.random()*roles.length)];
   alert(role)
   }
 </script>
<br><br>

  <img src="yesool.png" width="960" height="480"; style="z-index:1;">

<br><br>

<table width="960" border="0" >
<tr>
  <th><font size=8>오늘 당신의 역할은 <img src="question.jpeg" class="q"  width=50 height=50 onclick="role()"> 입니다. </font></th></tr>
</table>

<br>

<form name=exitnum method='get' action='./exitcount.php'>
<input type=hidden name=name5 value='<?=$name4?>'>
<br>
<table width="960" border="0" cellspacing="10">

<tr><th><font size=6><b>Exit number</b></font></th><th><font size=6><b>Current status</b></font></th><th><font size=6><b>Max number</b></font></th></tr>
<tr><th><button type="submit" name=num1 value='1'>Exit no.1</button></th><th><?=$row[1]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='2'>Exit no.2</button></th><th><?=$row[2]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='3'>Exit no.3</button></th><th><?=$row[3]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='4'>Exit no.4</button></th><th><?=$row[4]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='5'>Exit no.5</button></th><th><?=$row[5]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='6'>Exit no.6</button></th><th><?=$row[6]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='7'>Exit no.7</button></th><th><?=$row[7]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='8'>Exit no.8</button></th><th><?=$row[8]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='9'>Exit no.9</button></th><th><?=$row[9]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='10'>Exit no.10</button></th><th><?=$row[10]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='11'>Exit no.11</button></th><th><?=$row[11]?></th><th> <font size=5>150</font> </th></tr>
<tr><th><button type="submit" name=num1 value='12'>Exit no.12</button></th><th><?=$row[12]?></th><th> <font size=5>150</font> </th></tr>
</th></tr>
</table>
</form>

<br><br>
<table width="960" border="0" >
<tr>
  <th><input type="button" value="Reload" onClick="window.location.reload()"></th></tr>
</table>

<br><br><br>
 </body>
</html>
