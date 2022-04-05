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
        width: 500px;
      }

      #botao {
        background-color: #FEC68D;
        color: #ffffff
      }

      </style>


      <!-- Criando a classe container, que possui o esquema de "linhas" e "colunas" para exibir os componentes -->
      <div class="container" id="tamanhoContainer" style="margin-top: 40px">

        <div class="row">
        <div class="col-sm-6">
        <div class="card">
        <div class="card-body">

            <!-- Criando a classe container, que possui o esquema de "linhas" e "colunas" para exibir os componentes -->
            <h5 class="card-title">Adicionar Cliente</h5>
            <p class="card-text">Cadastrar um novo cliente no sistema.</p>

            <!-- O botão faz referencia ao arquivo que controla o CRUD  -->
            <a href="cadastroCliente.php" class="btn btn-primary">Adicionar Cliente</a>
        </div>
        </div>
        </div>
        <div class="col-sm-6">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Listar Clientes</h5>
            <p class="card-text">Listar Clientes cadastrados no sistema.</p>
            <a href="listarCliente.php" class="btn btn-primary">Listar Clientes</a>
        </div>
        </div>
        </div>
        </div>


        </div>

   
</body>

</html>