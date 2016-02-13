package controlador;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
public class Calculator extends HttpServlet {
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
        throws ServletException, IOException{
        float one,two;
        String operation=request.getParameter("operation"),result="";
        one=Float.parseFloat(request.getParameter("one"));
        two=Float.parseFloat(request.getParameter("two"));
        HttpSession session=request.getSession();
        if(operation.equals("plus")){
            result+=""+one+"+"+two+"="+(one+two)+"<br/>";
        }else{
            if(operation.equals("resta")){
                result+=""+one+"-"+two+"="+(one-two)+"<br/>";
                result+=""+two+"-"+one+"="+(two-one)+"<br/>";
            }else{
                if(operation.equals("multiplication")){
                    result+=""+one+"*"+two+"="+(one*two)+"<br/>";
                }else{
                    if(operation.equals("division")){
                        result+=""+one+"/"+two+"="+(one/two)+"<br/>";
                        result+=""+two+"/"+one+"="+(two/one)+"<br/>";
                    }
                }
            }
        }
        session.setAttribute("result",result);
        request.getRequestDispatcher("succefullCalculator.jsp").forward(request,response);
    }
}
