<?
$connect = mysql_connect ('localhost', 'smartev', 'asdf1234');
$db = mysql_select_db('smartev', $connect);

$sql = "select * from PEOPLE where NoId='1' ";
$result = mysql_query($sql, $connect);
$peopleinfo = mysql_fetch_row($result);

$num1 = $_GET[num1];

//function exitnum2($num1){
  if($peopleinfo[5]==0){
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==$num1){  
    echo "<script>alert(\"원래 선택하셨던 출구를 선택하셨습니다.  [".$num1."번 출구]\"); history.back(-1);</script>";
  }
  else if($peopleinfo[5]==1){
    $sql2 = "update STRUCTURE set ExitOne = ExitOne - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==2){
    $sql2 = "update STRUCTURE set ExitTwo = ExitTwo - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==3){
    $sql2 = "update STRUCTURE set ExitThree = ExitThree - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==4){
    $sql2 = "update STRUCTURE set ExitFour = ExitFour - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==5){
    $sql2 = "update STRUCTURE set ExitFive = ExitFive - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==6){
    $sql2 = "update STRUCTURE set ExitSix = ExitSix - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==7){
    $sql2 = "update STRUCTURE set ExitSeven = ExitSeven - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==8){
    $sql2 = "update STRUCTURE set ExitEight = ExitEight - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==9){
    $sql2 = "update STRUCTURE set ExitNine = ExitNine - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==10){
    $sql2 = "update STRUCTURE set ExitTen = ExitTen - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==11){
    $sql2 = "update STRUCTURE set ExitEleven = ExitEleven - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }
  else if($peopleinfo[5]==12){
    $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve - 1;" ;
    $result = mysql_query($sql2, $connect);

    $sql3 = "update PEOPLE set ExitNum = $num1;";
    $result2 = mysql_query($sql3, $connect);
    if($num1==1){
      $sql2 = "update STRUCTURE set ExitOne = ExitOne + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '1' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==2){
      $sql2 = "update STRUCTURE set ExitTwo = ExitTwo + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '2' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==3){
      $sql2 = "update STRUCTURE set ExitThree = ExitThree + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '3' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==4){
      $sql2 = "update STRUCTURE set ExitFour = ExitFour + 1;" ;
      $result = mysql_query($sql2, $connect);  
      
      $sql3 = "update PEOPLE set ExitNum = '4' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==5){
      $sql2 = "update STRUCTURE set ExitFive = ExitFive + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '5' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==6){
      $sql2 = "update STRUCTURE set ExitSix = ExitSix + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '6' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==7){
      $sql2 = "update STRUCTURE set ExitSeven = ExitSeven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '7' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==8){
      $sql2 = "update STRUCTURE set ExitEight = ExitEight + 1" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '8' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==9){
      $sql2 = "update STRUCTURE set ExitNine = ExitNine + 1;" ;
      $result = mysql_query($sql2, $connect);
      
      $sql3 = "update PEOPLE set ExitNum = '9' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==10){
      $sql2 = "update STRUCTURE set ExitTen = ExitTen + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '10' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==11){
      $sql2 = "update STRUCTURE set ExitEleven = ExitEleven + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '11' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    else if($num1==12){
      $sql2 = "update STRUCTURE set ExitTwelve = ExitTwelve + 1;" ;
      $result = mysql_query($sql2, $connect);

      $sql3 = "update PEOPLE set ExitNum = '12' where NoId='1';";
      $result2 = mysql_query($sql3, $connect);
    }
    echo "<script>alert(\"선택하신 출구는 ".$num1."번 출구입니다.\");</script>";
  }

//}

?>
 
<script>
  location.href='mapinfophp.php';
</script>
