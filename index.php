<!DOCTYPE html>
<html>
    <head>
        <title>Calendario</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <style type="text/css">
            body {margin: 0;background: #faf0f0;font-family: 'Arial', serif;}
            
            .semanas {
                font-size: 100px;
                margin: 30px;
            }
            
            .numesd {
                font-size: 100px;
                margin: 30px 20px 20px;
            }
            
            .mesess {
                font-size: 100px;
                margin: 30px 20px 20px;
            }
            
            .anoss {
                font-size: 100px;
                margin: 30px 20px 20px;
            }
            
            
            
        </style>	
        
        <!--<script language="JavaScript">
           /* window.onload = function (){
                document.getElementById("datalits").innerHTML="<h1>Data</h1>";
            }*/

        window.onload = function (){
        //document.write("<font color='#000000' size='3' face='arial'>")
        var mydate=new Date()
        var year=mydate.getYear()
        if (year<2000)
        year += (year < 1900) ? 1900 : 0
        var day=mydate.getDay()
        var month=mydate.getMonth()
        var daym=mydate.getDate()
        if (daym<10)
        daym="0"+daym
        var dayarray=new Array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado")
        var montharray=new Array(" de Janeiro de "," de Fevereiro de "," de Março de ","de Abril de ","de Maio de ","de Junho de","de Julho de ","de Agosto de ","de Setembro de "," de Outubro de "," de Novembro de "," de Dezembro de ")
        //document.write(" <div id='datalit'>  "+dayarray[day]+", "+daym+" "+montharray[month]+" "+year+" </div>")
        //document.write("<font color='#000000' size='3' face='arial'> <div id='datalit'>  "+dayarray[day]+", "+daym+" "+montharray[month]+" "+year+" </div></font>")
        
        //document.getElementById("datalits").innerHTML="<font color='#000000' size='3' face='arial'> <div>  "+dayarray[day]+", "+daym+" "+montharray[month]+" "+year+" </div></font>";
            
            document.getElementById("datasem").innerHTML=" "+dayarray[day]+" ";
            document.getElementById("datanum").innerHTML=" "+daym+" ";
            document.getElementById("mesess").innerHTML=" "+montharray[month]+" ";
            document.getElementById("anoss").innerHTML=" "+year+" ";
        
        }
            
        </script>-->
        
        <script language="JavaScript">
  
        /*-----Calendario-----*/
        window.onload = function (){
        var mydate=new Date()
        var year=mydate.getYear()
        if (year<2000)
        year += (year < 1900) ? 1900 : 0
        var day=mydate.getDay()
        var month=mydate.getMonth()
        var daym=mydate.getDate()
        if (daym<10)
        daym="0"+daym
        var dayarray=new Array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado")
        var montharray=new Array(" Janeiro "," Fevereiro "," Março "," Abril "," Maio "," Junho "," Julho "," Agosto "," Setembro "," Outubro "," Novembro "," Dezembro ")
        document.getElementById("datasem").innerHTML=" "+dayarray[day]+" ";
        document.getElementById("datanum").innerHTML=" "+daym+" ";
        document.getElementById("mesess").innerHTML=" "+montharray[month]+" ";
        document.getElementById("anoss").innerHTML=" "+year+" ";
        }
        /*-----Calendario-----*/
            
        </script>
	
    </head>
    
    <body>
        
        
        <div class="semanas" id="datasem"></div>
        
        <div class="numesd" id="datanum"></div>
        
        <div class="mesess" id="mesess"></div>
        
        <div class="anoss" id="anoss"></div>
        
    
    </body>
</html>