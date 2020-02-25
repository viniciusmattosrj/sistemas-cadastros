<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSS Materialize -->
    <link rel="stylesheet" type="text/css" media="screen" href="materialize/css/materialize.min.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <nav class="blue-grey">
        <div class="nav-wrapper container">
            <div class="brand-logo light">Sistema de Cadastro</div>
            <ul class="right">
                <li><a href=""><i class="material-icons left">account_circle</i>Cadastro</a></li>
                <li><a href=""><i class="material-icons left">search</i>Consultas</a></li>
            </ul>
        </div>
    </nav>

    <!-- Formulário de cadastro -->
    <div class="row container">
        <p>&nbsp;</p>
        <form action="database/create.php" method="POST" class="col s12">
            <fieldset class="formulario">
                <legend><img src="assets/images/avatar-2.png" alt="[imagem]" width="100"></legend>
                <h5 class="light center">Cadastro de Clientes</h5>

                <!-- Campo Nome-->
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>   
                    <input type="text" name="nome" id="nome" maxlength="40" require autofocus>
                    <label for="nome">Nome do Cliente</label>
                </div>

                <!-- Campo E-mail -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>   
                    <input type="text" name="email" id="email" maxlength="50" require>
                    <label for="email">E-mail do Cliente</label>
                </div>

                <!-- Campo Telefone -->
                <div class="input-field col s12">
                    <i class="material-icons prefix">phone</i>   
                    <input type="text" name="telefone" id="telefone" maxlength="15" require>
                    <label for="telefone">Telefone do Cliente</label>
                </div>

                <div class="input-fied col s12">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <input type="reset" value="limpar" class="btn red">
                </div>
            </fieldset>   
        </form>
    </div>

    <!-- Arquivos Jquery Javascript -->
    <script type="text/Javascript" src="materialize/js/jquery-3.3.1.min.js"></script>
    <script type="text/Javascript" src="materialize/js/materialize.min.js"></script>

    <!-- Inicialização Jquery-->
    <script type="text/Javascript" src="materialize/js/materialize.min.js">
        $(document).ready(function(){

        });
    </script>
</head>
</body>
</html>