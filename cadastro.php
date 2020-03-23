<?php 
    require_once('./includes/header.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <title>O que tem Dentro</title>
</head>
<body>
   
<div class="row">
    <div class="col-md-12 col-10 text-center my-md-4 mb-4 mt-2 ml-4">
        <h1 class="display-4">
            Cadastre-se
        </h1>
        <p class="text-muted"> Tenha acesso completo ao <br>nosso banco de produtos  </p>

    </div>
</div>

<div class="row justify-content-center mb-5">
    <div class="col-sm-12 col-md-10 col-lg-8 ">
        <form>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="inputNome">Nome</label>
                    <input type="text" class="form-control" id="inputNome" placeholder="Digite aqui seu nome">
                </div>
                <div class="form-group col-sm-6">
                        <label for="inputSobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="inputSobrenome" placeholder="Digite aqui seu Sobrenome">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-sm-6">
                        <label for="inputEnd">Email</label>
                        <input type="text" class="form-control" id="inputEnd" placeholder="Digite aqui seu Email">

                     </div>
                     <div class="form-group col-sm-6">
                              <label for="inputSenha">Senha</label>
                              <input type="text" class="form-control" id="inputSenha" placeholder="Digite aqui sua Senha">
                     </div>
            </div>    
            <div class="form-row ">
                <div class="col-sm-12 ">
                    <button type="submit" class="btn btn-danger ">Enviar</button>
                    <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus"
                    title="Pintou alguma dúvida?!" data-content="Fale conosco: help@oquetemdentro.com">Ajuda</a>
                </div>
            </div>
       </form>
         </div>
             <div class="col-md-12 mb-5 ">
            <div class="form-group">
               <p class="text-center"><a href="./login.php" id="signin">Ja esta cadastrado? Clique aqui!</a></p>
            </div>
   </div>
</div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>