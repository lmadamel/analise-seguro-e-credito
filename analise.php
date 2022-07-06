<!DOCTYPE html>
<html lang="pt-br">
<head> <!--configurações-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <title>Programação</title>
    
</head>
<body>
    
    <header> <!--configurações do topo do site-->
        <h3> Programação php</h3>
        <h4>tectreinamentos</h4>
    </header> 
    <br>
   
    <section> <!--seção-->
    
    <h1>Programação PHP</h1><br>
    <h2>Resultados de sua Analise de Seguro</h2>
        <?php
        $nomeCliente = $_POST["nome"];
        $salarioCliente = $_POST["salario"];
        $idadeCliente = $_POST["idade"];
        
        echo "<br>Oi! <b>$nomeCliente</b>, abaixo está o resultado de sua solicitação.<br><br>";
        if($salarioCliente >= 2000 && $idadeCliente > 18){
            
            echo "<b>Parabéns</b>, seu seguro foi <b>APROVADO.</b><br><br>";
            echo "Um de nossos consultores entrará em contato em breve!<br><br>";
            echo "Agradecemos a Confiança!";
        }
        
            else{
                echo "<b>Infelizmente</b> seu seguro foi <b>NEGADO.</b><br><br>";
                echo "Tente novamente em breve!<br>";
            }
        
        ?>


      <br>
      <a href="index.php"> << Voltar </a>

    </section>

    
        
        <footer> <!--informações de rodapé-->

        <h3>Programação PHP</h3>
        <h4>tectreinamentos</h4>
        <br>
        <p class="rodape"><b>Contatos:</b></p>
        <br>
        <P class="rodape"><b>Campinas e Região:</b></p> 
        <p class="rodape">(19) 0000-0000</p>
        <p class="rodape">(19) 0000-0000</p>
       
    </footer> 

</body>
</html>
