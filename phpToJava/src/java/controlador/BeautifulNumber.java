package controlador;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
public class BeautifulNumber extends HttpServlet {
    protected String beautifulNumber(int number){
        int aux=number;
        String process="";
        while(number!=1){
            if(number%2==0)
                number/=2;
            else
                number=number*3+1;
            process+=number+"<br>";
        }
        process+="then "+aux+" is number beautiful<br>";
        return process;
    }
    protected void doPost(HttpServletRequest request,HttpServletResponse response)
            throws ServletException,IOException{
        ;
    }
    protected void doGet(HttpServletRequest request,HttpServletResponse response)
            throws ServletException,IOException{
        int number=Integer.parseInt(request.getParameter("number"));
        String process=beautifulNumber(number);
        request.getSession().setAttribute("process",process);
        request.getRequestDispatcher("sucefullBeautifulNumber.jsp").forward(request, response);
    }
}
