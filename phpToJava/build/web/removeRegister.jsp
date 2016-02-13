<%
    boolean removeOk=(boolean)request.getSession().getAttribute("removeOk");
%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>register removed</title>
    </head>
    <body>
        <%
            if(removeOk){
        %>
                <h1>register removed</h1>
        <%
            }else{
        %>        
                <h1><b>ERROR</b> register <b>NO</b> removed</h1>
        <%
            }
        %>
    </body>
</html>
