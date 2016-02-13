<%
    String process=(String)request.getSession().getAttribute("process");
%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>beautiful number</title>
    </head>
    <body>
        <h1>
            Process:<br>
            <%= process%>
        </h1>
    </body>
</html>
    