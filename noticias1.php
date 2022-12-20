<?php include 'navbar.php' ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Notícias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="noticias.css">
    <!-- Bootstrap CSS -->

</head>


<body>

    <div id="main">
        <div class="container">
            <div class="card text-center">
                <div class="card-header">
                    <img src="./img/botoes/noticias.svg" alt="">
                </div>
                <div class="card-body">
                    <h1 class="card-title"> <strong>FINALMENTE</strong> Argentina fatura o tri mundial diante da França
                        e coroa<br> um genial
                        Messi</h1>
                    <p class="card-text">Croácia vence o Marrocos por 2 a 1 e garante a última posição no pódio da Copa
                        2022</p>
                </div>
                <div class="container">
                    <img width="100%"  style="border-radius: 30px;"
                        src="https://www.lance.com.br/files/article1x1/uploads/2022/12/18/639f54c58e509.jpeg"
                        class="card-img-top" alt="...">
                </div>
                <div class="card-footer text-muted">
                    Messi é finalmente campeão mundial de futebol pela Argentina (Alberto Estevez/ EFE)
                </div>
            </div>
        </div>

        <hr>

        <div class="noticias-text">
            <span class="noticias-lance">LANCE! 17/12/2022 14:01Doha (QAT)</span>
            <h3>
                A Argentina é tricampeã mundial de futebol. Lionel Messi é campeão mundial. O destino foi gracioso com a
                última dança do gênio num palco de Copa do Mundo. Após a decepção de 2014, o camisa 10 da Albiceleste
                agora tem a sua taça e coroação definitiva. Contra uma França que conseguiu salvar o que parecia derrota
                certa, a Argentina venceu nos pênaltis (4 x 2) após o empatar em 3 a 3 no tempo normal. Uma final de
                Copa do Mundo 2022 do Qatar, no Estádio Lusail, neste dia 18 de dezembro definitivamente para a
                história.
            </h3>
            <br>
            <br>
            <h3><strong>Resultado da disputa de terceiro lugar:</strong>:</h3>
            <br>
            <br>
            <span>12h - Croácia 2 x 1 Marrocos - Estádio Internacional<br> Khalifa</span>

        </div>


        <div class="ratio" style="--bs-aspect-ratio: 150%;">
            <div class="ratio-video"><iframe width="250" height="150" src="https://www.youtube.com/embed/DRkDJK5M71E"
                    title="Lionel Messi World Cup 2022 - All Beautiful World Cup Goals & Assists - English Commentary - HD"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <p>¡BANDERAZO HISTÓRICO! Toda la FIESTA<br> ARGENTINAa horas de la FINAL</p>
            </div>
            <div class="ratio-video"><iframe width="250" height="150" src="https://www.youtube.com/embed/l98N-sTRwSY"
                    title="Lionel Messi World Cup 2022 - All Beautiful World Cup Goals & Assists - English Commentary - HD"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <p>PREDICCIONES MUNDIAL QATAR 2022<br> | FINAL | ARGENTINA vs FRANCIA</p>
            </div>
            <div class="ratio-video"><iframe width="250" height="150" src="https://www.youtube.com/embed/HsRtfZkrwrs"
                    title="Lionel Messi World Cup 2022 - All Beautiful World Cup Goals & Assists - English Commentary - HD"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <p>Argentina x França | Simulando a FINAL<br>da Copa do Mundo</p>
            </div>

            <div class="ratio-video"><iframe width="250" height="150" src="https://www.youtube.com/embed/3Oxog2zhUPk"
                    title="Lionel Messi World Cup 2022 - All Beautiful World Cup Goals & Assists - English Commentary - HD"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <p>ARGENTINA 3 X 0 CROÁCIA<br>(MELHORES MOMENTOS)COPA DO MUNDO 2022</p>
            </div>
        </div>



        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item enable">
                    <a class="page-link" href="noticias.php?r=noticias" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="noticias.php?r=noticias">1</a></li>
                <li class="page-item"><a class="page-link" href="noticias1.php?r=noticias1">2</a></li>
                <li class="page-item"><a class="page-link" href="noticias2.php?r=noticias2">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="noticias2.php?r=noticias2">Next</a>
                </li>
            </ul>
        </nav>
</body>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->



</body>

</html>