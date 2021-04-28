<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../css/heroic-features.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style> 
      a:link 
        { 
         text-decoration:none; 
        }
    </style>  
</head>
<body class="bg-dark">


<?php
include "conexao.php";

$query = mysqli_query($conn,"SELECT * FROM `pdfs`");

// montagem do html da tabela

echo "<h2 class='text-center my-5 text-white'> Fique a vontade para os Downloads :)</h2>";


$table = "";

$table .= '<div class="container col-md-6 bg-light rounded">';
$table .= "<table class='table'>";
$table .= '<thead>';
$table .= '<tr>';
//$table .= '<th scope="col" class="text-center">Codigo</th>';
$table .= '<th scope="col" class="text-center">Assuntos</th>';

$table .= '</tr>';
$table .= '</thead>';
$table .= '<tbody>';



if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
             $table .= '<tr>';
        	   //$table .= "<th scope='row' class='text-center'>{$row['id']}</th>";
             $table .= "<td><a href='../arquivos/{$row['pdfs']}'>{$row['pdfs']}</td>";   
             $table .= '</tr>';
    }
}

$table .= '</tbody>';
$table .= '</table>';

$table .= "</div>";

echo $table;
?>

<div class="container col-md-7">
  <div class="row align-items-end">
    <div class="col ml-md-5">
      <a class="text-success" href="../index.php"><b>Voltar</b></a>
    </div>
    <div class="col">
      
    </div>
    <div class="col">
      <!--a class="text-danger ml-md-5" href="dowload.php" data-toggle="modal" data-target="#exampleModal">Apagar registro</a-->
    </div>
  </div>
</div>
<!------>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="apagar_tcc.php" method="POST" accept-charset="utf-8">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Digite o <b>código</b> no campo abaixo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control" name="codigo">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
          <button type="submit" class="btn btn-danger">Apagar</button>
        </div>
      </form>
    </div>  
  </div>
</div>


 
<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>