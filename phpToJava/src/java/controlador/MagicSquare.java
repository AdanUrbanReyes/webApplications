package controlador;
import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpSession;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

public class MagicSquare extends HttpServlet {
    protected void doGet(HttpServletRequest request,HttpServletResponse response)
        throws ServletException,IOException{
        HttpSession session=request.getSession();
        int sizeSquare=Integer.parseInt(request.getParameter("sizeSquare"));
        int [][]square=new int[sizeSquare][sizeSquare];
        int tope=(int)Math.pow(sizeSquare,2);
        int number=2,r=0,c=sizeSquare/2;
        square[r][c]=1;
        while(number<=tope){
            r--;
            c++;
            if (r < 0) {//salio by arriba of rows
                if (c < sizeSquare) {//salio by arriba of rows but not salio by columns 
                    r = sizeSquare - 1;
                } else {
                    if (c >= sizeSquare) {//salio by la esquina superior
                        r += 2;
                        c--;
                    }
                }
            } else {
                if (r >= 0) {//not salio of rows
                    if (c >= sizeSquare) {
                        c = 0;
                    }
                }
            }
            if (square[r][c] != 0) {//was ocupado
                r += 2;
                c--;
            }
            square[r][c] = number++;
        }
        session.setAttribute("sizeSquare",sizeSquare);
        session.setAttribute("square",square);
        request.getRequestDispatcher("magicSquareSuccefull.jsp").forward(request,response);
    }
}
