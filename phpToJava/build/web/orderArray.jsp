<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Order Array</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" >
            function setCells(){
                var i,sizeArray=document.getElementById("sizeArray").value;//get size of array
                var arraysCells=$('#arraysCells');//get label div
                arraysCells.empty();//remove all nodes hijos y subnodos
                for(i=0;i<sizeArray;i++){
                    arraysCells.append("cell "+i+"<input type=\"text\" name=\"cell"+i+"\" /><br/>");
                }
            }
        </script>
    </head>
    <body>
        <form action="OrderArray" method="post">
            Enter size of Array<input type="number" id="sizeArray" name="sizeArray" onkeyup="setCells()"/><br/>
            <h1>NOTA: can enter numbers or letters in cells</h1>
            <div id="arraysCells">
                
            </div><br/>
            <input type="submit" value="ordenar"/>
        </form>
    </body>
</html>
