<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link href="https://s3.amazonaws.com/codiqa-cdn/codiqa.ext.css"
	rel="stylesheet">
<link
	href="https://s3.amazonaws.com/codiqa-cdn/mobile/1.4.2/jquery.mobile-1.4.2.css"
	rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script
	src="https://s3.amazonaws.com/codiqa-cdn/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script src="https://s3.amazonaws.com/codiqa-cdn/codiqa.ext.js"></script>


<script src="script.js"></script>
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>



</head>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
//inicio o jquery
$(document).ready(function() {
// inicio uma requisição
    $.ajax({
    // url para o arquivo json.php
        url : "eventosJson.php",
    // dataType json
        dataType : "json",
    // função para de sucesso
        success : function(data){
        // vamos gerar um html e guardar nesta variável
            var html = "<div>";
 
        // executo este laço para ecessar os itens do objeto javaScript
            for($i=0; $i < data.length; $i++){
				html += "<ul data-role='listview' data-divider-theme='a' data-inset='true'>";
				html += "<li><a href='#evento-description' data-transition='slidefade'>";
				html += "<img src='img/may2.png' hspace='7' vspace='10'>";		
				html += "<h1>"+ data[$i].nome +"</h1>";
				html += "<p class='boldit'>" + data[$i].id +"</p>";
				html += "<p>xxxhs</p></a></li>";
				html += "</ul>";				
							
				
            // coloco o nome e sobre nome
                //html += "<strong>Nome:</strong> "+data[$i].nome +" ";
            // coloco a cidade
                //html += " <strong>ID:</strong> "+data[$i].id
            // e por ultimo dou uma quebra de linha
                html += "<br />";
            }//fim do laço
 			
			html += "</div>";
 
        //coloco a variável html na tela
            $('body').html(html);
        }
    });//termina o ajax
});//termina o jquery
</script>
</script>
</body>
</html>