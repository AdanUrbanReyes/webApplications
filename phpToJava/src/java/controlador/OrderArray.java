package controlador;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpSession;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
public class OrderArray extends HttpServlet {
    protected void doPost(HttpServletRequest request,HttpServletResponse response)
        throws ServletException,IOException{
        int i,j,sizeArray=Integer.parseInt(request.getParameter("sizeArray"));
        String []array=new String[sizeArray];
        String aux;
        HttpSession session=request.getSession();
        for(i=0;i<sizeArray;i++)
            array[i]=(String)request.getParameter("cell"+i);
        for(i=0;i<sizeArray;i++){
            for(j=i;j<sizeArray;j++){
                if(array[i].compareTo(array[j])>0){
                    aux=array[i];
                    array[i]=array[j];
                    array[j]=aux;
                }
            }
        }
        session.setAttribute("sizeArray",sizeArray);
        session.setAttribute("arrayOrded",array);
        request.getRequestDispatcher("orderArraySuccefull.jsp").forward(request, response);
    }
}
