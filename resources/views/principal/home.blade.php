<!DOCTYPE html>
<html>
<head>
  <title></title>

    <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Adaptação para Mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Sidenav CSS-->
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">

  <!-- Conteudo CSS -->
  <link rel="stylesheet" type="text/css" href="css/conteudo.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

  <!-- Load icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">

</head>


  @include('resource.navbar')

  @include('resource.sidenav')

  @include('formularios.login')





<body>


<!--Section: Serviços-->
<section class="text-center container">



    <!-- Heading -->

    <h2 class="my-5 font-weight-bold">SERVIÇOS</h2>

    <!--Grid row-->
    <div class="row">

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">
      <div class="view overlay z-depth-1-half">
        <img src="{{ asset('img/carro1.png') }}" class="img-fluid">
        <a href="/servico/automotivo">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <h4 class="my-4 font-weight-bold">Automotivo</h4>
      <p class="grey-text">Diversos serviços relacionados a mecânica, borracharia e parte elétrica de veículos de passeio.</p>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <div class="view overlay z-depth-1-half">
        <img src="{{ asset('img/marcenaria.png') }}" class="img-fluid">
        <a href="/servico/marcenaria">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <h4 class="my-4 font-weight-bold">Marcenaria</h4>
      <p class="grey-text">Empresas que confeccionam e reparam móveis e peças dando o acabamento necessário, utilizando equipamentos adequados para cada situação.</p>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

      <div class="view overlay z-depth-1-half">
        <img src=" {{ asset('/img/reparos-residenciais.png') }} " class="img-fluid">
        <a href="/servico/residencia">
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

      <h4 class="my-4 font-weight-bold">Residência</h4>
      <p class="grey-text">Empresas responsáveis por montar, ajustar, instalar, e reparar encanamentos, tubulações e outros condutos.</p>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

        <div class="view overlay z-depth-1-half">
          <img src=" {{ asset('/img/contabilidade.png') }} " class="img-fluid">
          <a href="/servico/contabilidade">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <h4 class="my-4 font-weight-bold">Contabilidade</h4>
        <p class="grey-text">Diversos serviços relacionados a mecânica, borracharia e parte elétrica de veículos de passeio.</p>

      </div>
      <!--Grid column-->

      <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

        <div class="view overlay z-depth-1-half">
          <img src="{{ asset('img/TI.png') }}" class="img-fluid">
          <a href="/servico/assistencia_em_ti">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <h4 class="my-4 font-weight-bold">Assistência de TI </h4>
        <p class="grey-text">Diversos serviços relacionados a mecânica, borracharia e parte elétrica de veículos de passeio.</p>

      </div>
      <!--Grid column-->

      <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

        <div class="view overlay z-depth-1-half">
          <img src="{{ asset('img/eletrica.png') }}" class="img-fluid">
          <a href="/servico/eletrica">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <h4 class="my-4 font-weight-bold">Elétrica</h4>
        <p class="grey-text">Diversos serviços relacion ados a mecânica, borracharia e parte elétrica de veículos de passeio.</p>

      </div>
      <!--Grid column-->

      <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

        <div class="view overlay z-depth-1-half">
          <img src="{{ asset('img/vendas.png') }}" class="img-fluid">
          <a href="/servico/venda">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <h4 class="my-4 font-weight-bold">Vendas</h4>
        <p class="grey-text">Diversos serviços relacionados a mecânica, borracharia e parte elétrica de veículos de passeio.</p>

      </div>
      <!--Grid column-->

      <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

        <div class="view overlay z-depth-1-half">
          <img src="{{ asset('img/jardinagem.png') }}" class="img-fluid">
          <a href="/servico/jardinagem">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <h4 class="my-4 font-weight-bold">Jardinagem</h4>
        <p class="grey-text">Diversos serviços relacionados a mecânica, borracharia e parte elétrica de veículos de passeio.</p>

      </div>
      <!--Grid column-->

      <!--Grid column-->
    <div class="col-lg-4 col-md-12 mb-4">

        <div class="view overlay z-depth-1-half">
          <img src="{{ asset('img/saude.png') }}" class="img-fluid">
          <a href="/servico/saude">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <h4 class="my-4 font-weight-bold">Saúde</h4>
        <p class="grey-text">Diversos serviços relacionados a mecânica, borracharia e parte elétrica de veículos de passeio.</p>

      </div>
      <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!--Section: Serviços-->

<hr class="my-5">












  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>

  <script type="text/javascript" src="js/validar.js"></script>
</body>
</html>
