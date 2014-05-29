<?php
echo "<html><meta charset = 'euc-kr'><head></head>";

$name=$_POST["name"];

$buildingName = $_POST['buildingName'];
if($buildingName == ""){
  echo "<script type='text/javascript'>";
   echo"  alert('모든 데이타를 입력하셔야 합니다.');";
    echo "parent.location.href='./building.html'";
   echo "</script>  ";
}
  $con = mysql_connect("localhost","smartev","asdf1234");
 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }

 mysql_select_db("smartev", $con);
      
  mysql_query("set names 'euc-kr'");     
    $query="SELECT * FROM STRUCTURE where Address like '%".$buildingName."%'";
  $result=mysql_query($query);




echo "<body><div align =center><hr color=green width=300><h2>".$buildingName." 검색결과</h2><hr color=green width=300><br>";
    
if(mysql_num_rows($result) == 0){
  echo "일치하는 건물 명이 없습니다";}
else{
    echo "<table>";
   
while($row = mysql_fetch_array($result))
   {
    echo "<tr align =left>";
   echo "<td><a target='_parent' href='./mapinfophp.php?name=$name'>" .$row['Address']. "</a></td>";
   echo "</tr>";
      }
 
 echo "</table>";
}
 mysql_close($con);

?>
