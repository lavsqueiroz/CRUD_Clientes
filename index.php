<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de clientes da Lavinia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!-- Importando o que precisa -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- Definindo as variaveis de definição da interface com css -->
    <style type="text/css">
      #tamanhoContainer {
        width: 900px;
      }

      .button {
          border-radius: 12px;
          font-size: 16px;
          width: 50%;
          text-align:center;
          margin: 0 auto;
        }
      

      </style>


      <!-- Criando a classe container, que possui o esquema de "linhas" e "colunas" para exibir os componentes -->
      <div class="container-fluid" id="tamanhoContainer" style="margin-top: 40px">

        <div class="row">
        <div class="col-md-6">
        <div class="card border-primary mb-3" style="width: 25rem;">
        <div class="card text-center">
        <div class="card w-90">
        <div class="card-body">
        

            <!-- Criando a classe container, que possui o esquema de "linhas" e "colunas" para exibir os componentes -->
            <h5 class="card-title"> Cadastrar Clientes</h5>
            <h6 class="card-text" >Cadastre novos clientes   no sistema para visualiza-los.</h6> <br>

            <!-- O botão faz referencia ao arquivo que controla o CRUD  -->
            <div class="botao" id="botao">
            <a href="cadastroCliente.php" class="btn btn-outline-primary button">Adicionar</a>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="card border-primary mb-3" style="width: 25rem;">
        <div class="card text-center">
        <div class="card w-90">
        <div class="card-body">
            <h5 class="card-title">Listar Clientes</h5> 
            <h6 class="card-text" >Visualize e edite os clientes cadastrados no sistema.</h6> <br>
            <div class="botao" id="botao">
            <a href="listarCliente.php" class="btn btn-outline-primary button">Listar</a>
            </div>
        </div>    
        </div>
        </div>
        </div>
        </div>
        </div>

    
        </div>

   
</body>

</html>