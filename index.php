<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script type="text/javascript" src="db/js/pesquisadados.js"></script>

  <title>HF Downloads</title>
  <style type="text/css">
    a{
      font-family: "Comic Sans MS";
    }
    button{
      font-family: "Comic Sans MS";
    }
    input{
      font-family: "Comic Sans MS";
    }
    .button-down {
      position: relative;
      padding: 5px;
      margin: 30px auto;
      background: #4F4F4F;
      height: 50px;
      width: 50px;
      border-radius: 50%;
      transition: all 0.2s linear;
    }

    .button-down:hover {
      transform: translate3d(0, 10px, 0);
    }
    .button-down::after {
      content: "";
      position: absolute;
      left: 13px;
      z-index: 11;
      display: block;
      width: 25px;
      height: 25px;
      border-top: 2px solid #fff;
      border-left: 2px solid #fff;
    }
    .button-down::after {
      top: 8px;
      transform: rotate(225deg);
    }
    
    @media screen and (max-width: 767px) {
      #titulo{
        
        font-size: 11px;
      }
      #texto{
        font-size: 9px;
      }
    }
  </style>
</head>  

<body style="background-color: #1C1C1C;">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">HF Downloads</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-2">
            <li class="nav-item">
              <a class="nav-link text-light" data-toggle="modal" data-target="#exampleModal">Contatos</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                 <a  data-toggle="modal" data-target="#exampleModal" class=" nav-link resultado text-warning" style="font-family: Comic Sans MS;"></a>
              </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0 ml-auto" action="db/download.php" method="POST" id="form-pesquisa">
            <input class="form-control mr-sm-2" type="text" placeholder="Digite aqui..." aria-label="Search" name="pesquisa" id="pesquisa">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </nav>
    </header>

<!--Modal upload-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel" style="font-family: Comic Sans MS;"><b>Armazene seu arquivo.</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body col-md-12">
        <form action="db/upload.php" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-12">
                 <input type="file" name="healthfile" value="selecione..." class="btn btn-outline-dark col-md-12">  
              </div>
            </div>
            <div class="form-row">
               <div class="col-md-4 mt-m2">
                 <button type="submit" class="btn btn-dark" name="submit">Fazer Upload</button>
               </div>
            </div> 
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal contato-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content">
      <div class="modal-header" style="background-color: #DCDCDC;">
        <h5 class="modal-title text-dark" id="exampleModalLabel" style="font-family: Comic Sans MS;"><b>Contatos</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <a4 style="font-family: Comic Sans MS;"><b>Email:</b> gabrielsantos0057@gmail.com</a4><br>
        <a4 style="font-family: Comic Sans MS;"><b>Whatsapp:</b> (91) 984355946</a4>
      </div>
    </div>
  </div>
</div>
<!---->

<div class="container-fluid d-flex flex-wrap mt-3 align-items-center p-5" style="background-color: #DCDCDC;">
  <div class="col-md-8 mt-4">
    <div class="row">
      <div id="meuCarousel" class="carousel slide w-100" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#meuCarousel" data-slide-to="0" class="active bg-dark"></li>
          <li data-target="#meuCarousel" data-slide-to="1" class="bg-dark"></li>
          <li data-target="#meuCarousel" data-slide-to="2" class="bg-dark"></li>
        </ol>
        <div class="carousel-inner rounded">
          <div class="carousel-item active">
            <img class="d-block w-100 img-fluid" src="imagens/carrocel_1.png" alt="primeiro slide">
            <div class="carousel-caption text">
              <h2 class="text-dark" id="titulo" style="font-family: Comic Sans MS;"><b>Bem vindo ao HF Downloads.</b></h2>
              <h3 class="text-dark" id="texto" style="font-family: Comic Sans MS;">Faça downloads a qualquer momento de materiais de acordo com nome do arquivo e contribua fazendo uploads para ajudar na democratização de ensino.</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="imagens/carrocel_2.png" alt="segundo slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" src="imagens/carrocel_3.png" alt="terceiro slide">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="card border border-dark mt-4">
      <div class="card-body">
        <p style="font-family: Comic Sans MS;" class="text-center">
        Faça buscas de PDFs úteis para seus estudos, trabalho, ou entretenimento. Se achar útil faça o uploads de materias em PDF para que outras pessoas possam utilizar seus materiais.</p>
      </div>
    </div>
    <div class="card border border-dark mt-2">
      <div class="card-body">
        <p style="font-family: Comic Sans MS;" class="text-center">
        Nos ajude compartilhando essa site para os amigos da escola ou faculdade, para assim podermos democratizar os materiais de estudo e entretenimento, sem custo algum.</p>
      </div>
    </div>
    <div class="button-down"></div>
    <div class="col text-center mt-2">
      <button type="button" class="btn btn-dark col-md-4" data-toggle="modal" data-target="#exampleModal2">upload</button>
    </div>
    <div class="col text-center">
       <div class="fb-share-button mt-4" data-href="https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&display=popup&ref=plugin&src=share_button#_=_" data-layout="button_count" data-size="small"><a target="_blank" class="fb-xfbml-parse-ignore">Compartilhar</a></div>  
    </div>
  </div>
</div>

<!----->
<div class="container-fluid d-flex flex-wrap mt-2 p-4 mb-5" style="background-color: #DCDCDC;">
  <div class="col-md-4 mt-2">
    <div class="card border border-white">
      <div class="card-body">
        <h4 style="font-family: Comic Sans MS;" class="text-center"><b>Sobre os Downloads</b></h4>
        <p style="font-family: Comic Sans MS;" class="text-center">
        Os <b>Dowloads</b> são realizados de forma gratuita, pois a HF Downloads é a favor da democratização do ensino, com tudo não permitiremos e não concordamos com dowloads de materiais com direitos autorais em vigor. Ao relizar o dowload certifique-se de sus autoria.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="card border border-white">
      <div class="card-body">
        <h4 style="font-family: Comic Sans MS;" class="text-center"><b>Sobre os Uploads</b></h4>
        <p style="font-family: Comic Sans MS;" class="text-center">
        Os <b>Uploads</b> são realizados de forma gratuita, contudo depende primordialmente da divulgação do site para que alunos e professores possam ter acesso e fazer os downloads dos materiais, lembrando que o site aceita somente arquivos em PDF.</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 mt-2">
    <div class="card border border-white">
      <div class="card-body">
        <h4 style="font-family: Comic Sans MS;" class="text-center"><b>Sobre o HF Downlods</b></h4>
        <p style="font-family: Comic Sans MS;" class="text-center">
        Nasceu da ideia de um recém formado que acredita que o ensino de qualidade pode ser democratizado, e quem sabe no futuro os estudantes das séries iniciais possam ter materiais únicos, independente de classe social, ou da localidade em que vivem.</p>
      </div>
    </div>
  </div>
</div>
<!------>
<section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #1C1C1C;">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="#"> - HF Downloads</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>

<!------>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0" nonce="Ek73qboo"></script>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!---->

</body>

</html>