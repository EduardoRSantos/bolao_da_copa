<?php include "_scripts/config.php"; ?>
<?php include 'navbar.php'; ?>
<?php include '_scripts/autenticar.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>BOLÃO COPA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./templates/tabelas/styles.css">
  <!-- Bootstrap CSS -->

</head>


<body>
  <form class="container form">
    <?php
    $usuario = $_SESSION['email'];
    $sql = "SELECT * FROM aposta a  join dados_jogos d on d.id = a.id_dados WHERE a.usuario = '$usuario' HAVING a.time1 = d.rt1 && a.time2 = d.rt2;";
    $query = $mysqli->query($sql);
    while ($dados = $query->fetch_array()) {
    ?>
    <div class="rodadas" style=" 
        background-image: url(./img/selecao/acertos.svg);
        background-repeat: no-repeat, no-repeat;
        background-size: cover;">
      <div class="col-12">
        <div class="rodadas-text">
          Data do Jogo:
          <?php echo $dados['data']; ?> <br>
          Hora do Jogo:
          <?php echo $dados['horario']; ?> <br>
          Estadio:
          <?php echo $dados['local']; ?> <br>
        </div>
        <div class="rodadas-img">
          <img src="_images/<?php echo $dados['timea']; ?>.svg">
          <?php echo $dados['timea']; ?>
          <input type="text" class="form-control" width="20px" name="timea" value="<?php echo $dados['time1'] ?>"
            placeholder="Campo desabilitado" disabled="">
          <span>X</span>
          <input type="text" class="form-control" width="20px" name="timeb" value="<?php echo $dados['time2'] ?>"
            placeholder="Campo desabilitado" disabled="">
          <?php echo $dados['timeb']; ?>
          <img src="_images/<?php echo $dados['timeb']; ?>.svg"><br>
        </div>
      </div>
    </div>

    </div>
    <?php } ?>
  </form>


  <form class="container form">
    <?php
    $usuario = $_SESSION['email'];
    $sql = "SELECT * FROM aposta a  join dados_jogos d on d.id = a.id_dados WHERE a.usuario = '$usuario' HAVING a.time1 != d.rt1 && a.time2 != d.rt2;";
    $query = $mysqli->query($sql);
    while ($dados = $query->fetch_array()) {
    ?>
    <div class="rodadas" style=" 
        background-image: url(./img/selecao/erros.svg);
        background-repeat: no-repeat, no-repeat;
        background-size: cover;">
      <div class="col-12">
        <div class="rodadas-text">
          Data do Jogo:
          <?php echo $dados['data']; ?> <br>
          Hora do Jogo:
          <?php echo $dados['horario']; ?> <br>
          Estadio:
          <?php echo $dados['local']; ?> <br>
        </div>
        <div class="rodadas-img">
          <img src="_images/<?php echo $dados['timea']; ?>.svg">
          <?php echo $dados['timea']; ?>
          <input type=" " class="form-control" width="20px" name="timea" value="<?php echo $dados['time1'] ?>"
            placeholder="Campo desabilitado" disabled="">
          <span>X</span>
          <input type="text" class="form-control" width="20px" name="timeb" value="<?php echo $dados['time2'] ?>"
            placeholder="Campo desabilitado" disabled="">
          <?php echo $dados['timeb']; ?>
          <img src="_images/<?php echo $dados['timeb']; ?>.svg"><br>
        </div>
      </div>
    </div>

    </div>
    <?php } ?>
  </form>
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