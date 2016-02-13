package controlador;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.PreparedStatement;
import java.sql.SQLException;
public class Mysql {
    private Connection connection;
    private ResultSet response;
    private PreparedStatement query;
    
    public Mysql(String server,String user,String password,String dataBase) {
        try{
            Class.forName("com.mysql.jdbc.Driver");
            connection=DriverManager.getConnection("jdbc:mysql://"+server+"/"+dataBase, user, password);
            System.out.print("connection succefull "+dataBase);
        }catch(ClassNotFoundException cnfe){
            System.out.print(cnfe.toString());
        }catch(SQLException sqle){
            System.out.print("error connecting with data base "+dataBase+" with server "+server+" user "+user+"\n"+sqle.toString()+"\n");
        }
    }
    public void desconnect(){
        try{
            if(query!=null){
                query.close();
            }
            if(response!=null){
                response.close();
            }
            if(connection!=null){
                connection.close();
            }
        }catch(Exception e){
            System.out.print("error closing connection\n"+e.toString());
        }
    }
    public boolean update(String update){
        try{
            query=connection.prepareStatement(update);//prepara el update  
            query.executeUpdate();//execute update
            return true;//return true that representa that update succefull
        }catch(SQLException sqle){
            System.out.print("error in update \n"+sqle.toString()+"\n");
        }
        return false;//return false that representa that update failded
    }
    public ResultSet query(String query){
        try{
            this.query=connection.prepareStatement(query);//preparo la query
            response=this.query.executeQuery();//execute query
        }catch(SQLException sqle){
            System.out.print("error executing query\n"+sqle.toString()+"\n");
            return null;//return null that representa query failded
        }
        return response;//return response of query
    }    
}
