<!DOCTYPE html>
<html lang="pt-br">
<head> <!--configurações-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
    <title>Programação</title>
    <style type="text/css">
      
      .formulario{
        background-color: #808080;
        color: #ffffff;
        text-shadow: 2px 2px #000;
        padding: 10px;
        font-size: 1.9rem;
        font-weight: bold;
      }
    
      input{
        font-size: 1.7rem;
        padding: 4px;
        border-radius: 10px;
        border: solid;
        font-weight: bold;
      }

      h2{
        text-align: left;
      }

    </style>


    
</head>
<body>
    
    <header> <!--configurações do topo do site-->
        <h3> Programação PHP</h3>
        <h4>tectreinamentos</h4>
    </header> 
    <br>
   
    <section> <!--seção-->
    
    <h1>Programação PHP</h1><br>
    <h2>Analise de Seguro - Utilizando a função SE (IF/ELSE)</h2>
    
      <div class="formulario">

        <form action="analise.php" method="post" target="">
          
          <label for="nome">Nome:</label><br>
          <input type="text" id="nome" name="nome" placeholder="Insira seu nome">
          <br><br>
          <label for="idade">Idade</label><br>
          <input type="text" id="idade" name="idade" placeholder="Sua Idade">
          <br><br>
          <label for="salario">Salario:</label><br>
          <input type="text" id="salario" name="salario" placeholder="Seu Salario">
          <br><br>
          <input type="submit" name="Enviar"> <br>

        </form>

      </div>

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
