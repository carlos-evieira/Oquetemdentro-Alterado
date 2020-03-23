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
   

        <main>
        <section class="instrucao1">Posicione o codigo de barras na área abaixo:</section>
        <div class="leitura"></div>
        
        <section class="instrucao2">Digite abaixo o código de barras do produto</section>
        <section class="instrucaoMobile">Se preferir digite aqui o código de barras do produto</section>
            
        
        <!--<div class="opcao">-->
            <form>
            <input class="codB" type="number" name="cod_barras"> 
            <button class="botao" type="button">Enviar</button></aside> 
            </form>
            
        <!--</div> -->   
        <section class="resultado">Resultado da sua busca</section>
            <article class="ingredientes1">Ingredientes cadastrdos por você presentes no produto:   
                <div class="destaque-contem">
                    <ul>
                        <li> Ovos, </li> 
                        <li> Leite, </li> 
                        <li> Derivados de trigo e de aveia.</li> 
                        <li>Pode conter soja, nozes, amendoim, amêndoa, avelãs, castanha-de-caju, cevada e centeio. </li>
                        <li>Contém glúten.</li>
                    </ul>
                </div>
            </article>
            <article class="ingredientes2">Lista completa de ingredientes
                <div class="demais">
                    <P>farinha de trigo fortificada com ferro e ácido fólico, açúcar, recheio sabor chocolate (água, açúcar, xarope de glicose, leite em pó desnatado, cacau em pó, amido modificado, polidextrose, umectantes: sorbitol e glicerina, espessante pectina, conservador sorbato de potássio, acidulante ácido fosfórico e aromatizante), ovo, óleo vegetal de girassol, purê de banana, açúcar líquido invertido, farinha de aveia, sal, fibra de laranja, umectante glicerina, emulsificantes: mono e diglicerídeos de ácidos graxos e ésteres de ácidos graxos com poliglicerol, aromatizante, fermentos químicos: fosfato monocálcico, pirofosfato ácido de cálcio e bicarbonato de sódio, conservadores: propionato de cálcio e ácido sórbico, espessantes: goma acácia, goma xantana e goma guar e acidulante ácido cítrico. Alérgicos: contém ovos, leite, ingredientes: derivados de trigo e de aveia. Pode conter soja, nozes, amendoim, amêndoa, avelãs, castanha-de-caju, cevada e centeio. Contém glúten.</P>
                </div>
            </article>
        

    </main>
    </body>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
</body>
</html>