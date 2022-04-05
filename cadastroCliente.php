<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <style type="text/css">
        #tamanhoContainer{
            width:900px;
        }
    </style>

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

        <h4>Formulário de Cadastro </h4>


        <form action="clienteInsert.php" method="post" style="margin-top: 20px">

        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" placeholder="Digite o Nome" required>
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input type="text" class="form-control" id="cpf" autocomplete="off" name="cpf" placeholder="Digite o CPF" required>
        </div>
        <div class="form-group">
            <label>Observacao</label>
            <input type="text" class="form-control" id="obs" autocomplete="off" name="obs" placeholder="Insira observações" required>
        </div>

        <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-primary botao">Voltar</a>
        <button type="submit" id="botao" class="btn btn-primary botao">Cadastrar</button>
        </div>
        </form>

    </div>

</body>
</html>