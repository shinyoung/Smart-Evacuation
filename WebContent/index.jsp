<%@ page language="java" contentType="text/html; charset=EUC-KR"
    pageEncoding="EUC-KR"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=EUC-KR">
<title>SDS</title>
</head>
<body>
<div align = "center">
<hr color="green" width="300">
	<h2>개 인 정 보 입 력</h2>
	<hr color="green" width="300">
	<form name="insert" action="infoInsert.jsp" method="post">
		<table border="1">
			<tr>
				<td align="center">
					닉 네 임 : <input type="text" name="name"><br>
					나     이 : <input type="text" name="age"><br>
					성     별 : <input type="radio" name="gender" value = "m">남자 <input type="radio" name="gender" value = "f">여자 <br>
					장애여부 : <input type="radio" name="defect" value = "d">O <input type="radio" name="defect" value = "n">X<br>
							
					<input type="submit" value="입력">
					<input type="reset" value="취소">
				</td>
			</tr>
		</table>
	</form>
	
</div>
</body>
</html>
