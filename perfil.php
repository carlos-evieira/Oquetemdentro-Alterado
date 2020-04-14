<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <title>O que tem Dentro</title>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css">

</head>
<body>
<?php require_once('./includes/header.php'); ?>



  <div class="container">
      <div class="row">
          <div class=" col-lg-6 ml-5 mx-3 myfa-rotate-270 py-5">
              <h3>Selecione os ingredientes que você tem restrição</h3>
  
              <div class=" col-xl-12">
                  <label>Ingredientes</label>
  
                  <select name="alergenos" multiple="" class="container label ui selection fluid dropdown ">
                  <!-- <option value="">Todos</option> -->
                  <option>Farinha de trigo</option> 
                  <option>crustáceos</option> 
                  <option>ovos</option> 
                  <option>peixes</option> 
                  <option>amendoim</option> 
                  <option>soja</option> 
                  <option>leites de todas as espécies de animais mamíferos</option> 
                  <option>amêndoa</option> 
                  <option>avelãs</option> 
                  <option>castanha de caju</option> 
                  <option>castanha-do-brasil ou castanha-do-pará</option> 
                  <option>macadâmias</option> 
                  <option>nozes</option> 
                  <option>pecãs</option> 
                  <option>pistaches</option> 
                  <option>pinoli</option> 
                  <option>castanhas</option> 
                  <option>látex natural</option> 
                  <option>centeio</option> 
                  <option>cevada</option> 
                  <option>aveia e suas estirpes hibridizadas</option> 
  
                  </select>
              </div>
              <button type="submit" class="btn btn-danger lista">Enviar</button> 
              <button type="submit" class="ui button lista m-3">Limpar selecionados</button>
          </div>
     </div>  
     
    <div class="accordion md-accordion col-lg-4" id="accordionEx" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne1">
          <a class='links' data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
            aria-controls="collapseOne1">
            <h5 class="mb-0">
              Ultimas consultas <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
          </a>
        </div>
        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
          data-parent="#accordionEx">
          <div class="card-body">
          <ul class='mx-5'>
                <li>Bis</li>
                <li>Leite ninho</li>
                <li>Cup noodles frango</li>
                <li>Lasanha a bolonhesa sadia</li>
            </ul>
          </div>
        </div>
      
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo2">
          <a class="collapsed links" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
            aria-expanded="false" aria-controls="collapseTwo2">
            <h5 class="mb-0">
            Lista alergenos cadastrados <i class="fas fa-angle-down rotate-icon"></i>
            </h5>
          </a>
        </div>
          <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
            data-parent="#accordionEx">
            <div class="card-body">
                  <ul class='mx-5'>
                      <li>Gluten</li>
                      <li>castanha de caju</li>
                      <li>macadâmias</li>
                      <li>Corante</li>
                      <li>Camarao</li>
                  </ul>
            </div>
          </div>
      </div>
      
      <div class="card">
        <div class="card-header" role="tab" id="headingThree3">
          <a class="collapsed links" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
            aria-expanded="false" aria-controls="collapseThree3">
            <h5 class="mb-0">
              Meus dependentes<i class="fas fa-angle-down rotate-icon"></i>
            </h5>
          </a>
        </div>
          <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
            data-parent="#accordionEx">
            <div class="card-body">
                  <ul class='mx-5'>
                      <li>João</li>
                      <li>Pedrinho</li>
                  </ul>
            </div>
          </div>
      </div>
     </div>       
    </div> 


   

    


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js"></script>
    <script>
        $('#my-select').multiSelect();

           /*script estilo 2*/

           $('.label.ui.dropdown')
        .dropdown();

        $('.no.label.ui.dropdown')
        .dropdown({
        useLabels: false
        });

        $('.ui.button').on('click', function () {
        $('.ui.dropdown')
            .dropdown('restore defaults')
        })


    </script>

 


</body>
</html>