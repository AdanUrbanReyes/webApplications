<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>calculator</title>
    </head>
    <body>
        <form action="Calculator" method="get">   
            <select name="operation">
                <option value="plus">plus</option>
                <option value="resta">resta</option>
                <option value="multiplication">multiplication</option>
                <option value="division">division</option>
            </select><br/>
            enter two numbers<br/>
            <input type="text" name="one"/><br/>
            <input type="text" name="two"><br/> 
            <input type="submit" value="calculator"/><br/>
        </form>
    </body>
</html>