<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>add register</title>
    </head>
    <body>
        <h1>Please enter all fields</h1>
        <form action="Register" method="post">
            name: <input type="text" name="name" /></br>
            surname: <input type="text" name="surname"/></br>
            phone: <input type="phone" name="phone" /></br>
            email: <input type="email" name="email"/></br>
            password: <input type="password" name="password"/></br>
            <input type="submit" value="register"/><br/>
            <input type="reset" />
        </form>
    </body>
</html>
