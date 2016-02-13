<%
    String []arrayOrded=(String [])request.getSession().getAttribute("arrayOrded");
    int i,sizeArray=Integer.parseInt(request.getSession().getAttribute("sizeArray").toString());
%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Order Array Succefull</title>
    </head>
    <body>
        <%
            out.print("<h1>array ordenado<br/></h1>");
            for(i=0;i<sizeArray;i++){
                out.print(arrayOrded[i]+"<br/>");
            }
        %>
    </body>
</html>
