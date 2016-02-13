package controlador;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import java.util.LinkedList;
import modelo.User;
import modelo.UserDAO;
public class Register extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException{
        User user=new User(request.getParameter("email"),request.getParameter("password"),request.getParameter("name"),request.getParameter("surname"),request.getParameter("phone"));
        UserDAO.insertUser(user);
        HttpSession session=request.getSession();
        session.setAttribute("user", user);
        request.getRequestDispatcher("succefullAddRegister.jsp").forward(request, response);
    }
    protected void doGet(HttpServletRequest request,HttpServletResponse response)
            throws ServletException,IOException{
        String email=request.getParameter("emailRemove");
        HttpSession session=request.getSession();
        if(email!=null){
            boolean removeOk=UserDAO.removeUser(email);
            session.setAttribute("removeOk",removeOk);
            request.getRequestDispatcher("removeRegister.jsp").forward(request,response);
        }else{
            String remove=request.getParameter("removeRegister");
            LinkedList <User> users=new LinkedList<User>();
            users=UserDAO.getUsers();
            session.setAttribute("users", users);
            if(remove!=null)
                session.setAttribute("action","remove");
            else
                session.setAttribute("action","show");
            request.getRequestDispatcher("showRegister.jsp").forward(request, response);
        }
    }
}
