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
    <?php require_once('./includes/header.php'); ?>
    <div class="container">  
        <div class="row">
            <div class="col-md-12 col-sm-10 text-center my-4 mb-3 mt-2">
                <h1 class="display-4"><i class="fa fa-envelope text-primary col-12 col-md-1" aria-hidden="true"></i>
                Complete Seu Cadastro
                </h1>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="inputNome">Seu nome</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Digite aqui seu nome">
            </div>
            <div class="form-group col-sm-6">
                <label for="inputSobrenome">Seu sobrenome</label>
                <input type="text" class="form-control" id="inputSobrenome" placeholder="Digite aqui sobrenome">
            </div>
        </div>
        <form>
            <div>
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="inputEnd">Seu endereço</label>
                        <input type="text" class="form-control" id="inputEnd" placeholder="Digite aqui seu endereço completo">
                    </div>
                </div>    

                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="inputCidade">Sua cidade</label>
                        <input type="text" class="form-control" id="inputCidade" placeholder="Digite aqui sua cidade">
                    </div>
                    <div class="form-group col-sm-4">
                        <label for="inputEst">Seu estado</label>
                        <select id="inputEst" class="form-control">
                            <option selected>Unidades federativas...</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AM</option>
                            <option>AP</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MG</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>PR</option>
                            <option>RJ</option>
                            <option>RO</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>SC</option>
                            <option>SE</option>
                            <option>SP</option>
                            <option>TO</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-2">
                        <label for="inputCEP">Seu CEP</label>
                        <input type="text" class="form-control" id="inputCEP" placeholder="XXXXX-XXX">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-12">
                        <label for="alimentos">Selecione os produtos aos quais é alérgico</label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Leite</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck2">Ovo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck3">Amendoim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
                            <label class="form-check-label" for="defaultCheck4">Oleaginosas</label>
                        </div>
                    </div>

                    <div class="form-group col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                            <label class="form-check-label" for="defaultCheck5">Crustáceos</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck6">
                            <label class="form-check-label" for="defaultCheck6">Frutos do Mar</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
                            <label class="form-check-label" for="defaultCheck7">Peixe</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck8">
                            <label class="form-check-label" for="defaultCheck8">Soja</label>
                        </div>
                    </div>

                    <div class="form-group col-sm-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck9">
                            <label class="form-check-label" for="defaultCheck9">Trigo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck10">
                            <label class="form-check-label" for="defaultCheck10">Glúten</label>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-lg-12 text-right enviar">
                <button type="submit" class="btn btn-danger ">Enviar</button>
                <a tabindex="0" class="btn btn-secondary ml-2" role="button" data-toggle="popover" data-placement="right" data-trigger="focus"
                    title="Pintou alguma dúvida?!" data-content="Fale conosco: help@oquetemdentro.com">Ajuda</a>
            </div>
        </form>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>