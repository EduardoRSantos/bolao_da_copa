<?php
include 'autenticar.php';
include 'config.php';

?>

<html>
    <body>
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
<?php
$login = $_SESSION['email'];
$variavel = $_POST['count'] -1;
$a = 1;
for ($i = 1; $i <= $variavel; $i++){
    $jogo = $_POST['jogo'.$a];
    $timea = $_POST['timea'.$a];
    $timeb = $_POST['timeb'.$a];
    $sql = "INSERT INTO aposta (id,id_dados,time1, time2,situacao, usuario) VALUES (default,'$jogo','$timea','$timeb','FINALIZADO','$login');";
    $query = $mysqli->query($sql);
    $a++;
}
if($query){?>
    <script type="text/javascript">
        Swal.fire({
            title:'Confirmado',
            text:'Aposta realizada!',
            icon:'success',
            confirmButtonText:'Ok'
        }).then((result)=>{
            if(result.isConfirmed){
                location.href="../index.php?r=principal";
            }
        })
    </script>
<?php }?>
 </body>
</html>