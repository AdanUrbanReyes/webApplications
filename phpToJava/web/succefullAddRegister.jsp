<%@page import="modelo.User"%>
<%
    User user=(User)request.getSession().getAttribute("user");
%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>user added succefull</title>
    </head>
    <body>
        <h1>user</h1><br/>
        name <%= user.getName()%><br/>
        surname <%= user.getSurname()%><br/>
        email <%= user.getEmail()%><br/>
        phone <%= user.getPhone()%><br/>
        <h1>added succefull</h1><br/>
    </body>
</html>
