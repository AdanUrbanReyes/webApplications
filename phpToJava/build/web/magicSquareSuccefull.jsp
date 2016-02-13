<%
    int [][]square=(int [][])request.getSession().getAttribute("square");
    int r,c,sizeSquare=Integer.parseInt(request.getSession().getAttribute("sizeSquare").toString());
%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Magic Square</title>
    </head>
    <body>
        <h1>Magic Square</h1><br/>
        <table>
        <%
            for(r=0;r<sizeSquare;r++){
        %>
            <tr>
            <%
                for(c=0;c<sizeSquare;c++){
            %>
                    <th>
                    <%
                    out.print(square[r][c]);
                    %>
                    </th>    
            <%
                }
            %>
            </tr>
        <%
            }
        %>
        </table>
    </body>
</html>
