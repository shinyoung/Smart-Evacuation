<%@ page language="java" contentType="text/html; charset=EUC-KR"
    pageEncoding="EUC-KR"%>
<jsp:useBean id="bdao" class="my.info.infoDAO" />
<jsp:useBean id="bdto" class="my.info.infoDTO" />
<%request.setCharacterEncoding("EUC-KR");  %>
<jsp:setProperty property="*" name="bdto"/>
		
<% 
 
  if (bdto.getName()==null || bdto.getAge()==null || bdto.getGender()==null || bdto.getDefect()==null ||
    bdto.getName().trim().equals("") || bdto.getAge().trim().equals("") || 
    bdto.getGender().trim().equals("") || bdto.getDefect().trim().equals("")){%>
   <script type="text/javascript">
    alert("모든 데이타를 입력하셔야 합니다.");
    history.back();
   </script>  
<%  return;
  }
  
  String uri = null;
 
   int n = bdao.insertInfo(bdto.getName(), bdto.getAge(), bdto.getGender(), bdto.getDefect());
   if (n>0){
    uri = "building.jsp";
   }else { 
    uri = "index.jsp";
   }
  
%>
<script type="text/javascript">
 location.href="<%=uri%>";
</script>
