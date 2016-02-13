<%
    String result=(String)request.getSession().getAttribute("result");
%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>succefull calculator</title>
    </head>
    <body>
        <h1>
            <%= result%>
        </h1>
    </body>
</html>
