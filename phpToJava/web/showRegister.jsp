<%@page import="java.util.LinkedList"%>
<%@page import="modelo.User"%>
<%
    LinkedList <User> users=(LinkedList<User>)request.getSession().getAttribute("users");
    int i,size=users.size();
    String action=(String)request.getSession().getAttribute("action");
%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>registers</title>
    </head>
    <body>
        <h1>Users</h1>
        <%
            if(size==0){
                out.print("any register :(<br/>");
            }else{
                for(i=0;i<size;i++){
                    User user=users.get(i);
                    out.print("register "+(i+1)+"<br/>");
                    out.print("name: "+user.getName()+"<br/>surname: "+user.getSurname()+"<br/>email: "+user.getEmail()+"</br>phone: "+user.getPhone()+"<br/><br/>");
                }
            }
            if(action.equals("remove")){
        %>
                <form action="Register" method="get">    
                    enter email: <input type="email" name="emailRemove" /><br/>
                    <input type="submit" value="remove register"/><br/>
                </form>
        <%
            }
        %>
    </body>
</html>
