package modelo;

import controlador.Mysql;
import java.util.LinkedList;
import java.sql.ResultSet;
import java.sql.SQLException;
public class UserDAO {
    public static User getUser(String email){
        Mysql mysql=new Mysql("localhost","root","ayani13711?","sale_ayan");
        User user=null;
        ResultSet response=mysql.query("select * from user where email='"+email+"'");
        try{
            if(response.next()){
                user=new User(response.getString("email"),response.getString("password"),response.getString("name"),response.getString("surname"),response.getString("phone"));
            }
        }catch(SQLException sqle){
            System.out.print("error gettin user "+email+"\n"+sqle.toString());
        }
        mysql.desconnect();
        return user;
    }
    public static boolean removeUser(String email){
        Mysql mysql=new Mysql("localhost","root","ayani13711?","sale_ayan");
        boolean removeOk=mysql.update("delete from user where email='"+email+"'");
        mysql.desconnect();
        return removeOk;
    }
    public static LinkedList<User> getUsers(){
        LinkedList<User> users=new LinkedList<User>();
        Mysql mysql=new Mysql("localhost","root","ayani13711?","sale_ayan");
        ResultSet response=mysql.query("select * from user");
        try{
            while(response.next())
                users.add(new User(response.getString("email"),response.getString("password"),response.getString("name"),response.getString("surname"),response.getString("phone")));
        }catch(SQLException sqle){
            System.out.print("error getting all users "+sqle.toString());
        }
        mysql.desconnect();
        return users;
    }
    public static boolean insertUser(User user){
        Mysql mysql=new Mysql("localhost","root","ayani13711?","sale_ayan");
        boolean update=mysql.update("insert into user value('"+user.getName()+"','"+user.getSurname()+"','"+user.getPhone()+"','"+user.getEmail()+"','"+user.getPassword()+"')");
        mysql.desconnect();
        return update;
    }
}
