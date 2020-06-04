<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>TCC</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }} " rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- CSS do Index -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
</head>

<body>

  <header>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark blue-gradient fixed-top scrolling-navbar">


      <!-- LOGO -->
      <a class="navbar-brand" href="/"><img src=" {{ asset('img/logo1.png') }}" width="90" class="img-fluid"></a>

      <!-- Botão para Mostrar e Recolher o NAVBAR no Mobile -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


    <div class="collapse navbar-collapse" id="navbarNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#como-funciona">Como funciona?</a>
            </li>
            <li class="nav-item">
                @if(auth::check())
                <a class="nav-link" href="/home">Cadastre sua Empresa</a>
                @else
                    <a class="nav-link" href="/register">Cadastre sua Empresa</a>
                @endif
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contato">Contato</a>
            </li>
        </ul>
        <!-- Links -->


            @if(auth::check())
                <a href="/home">
            @else
                <a href="/login">
            @endif
                <button type="button" class="btn btn-yellow" data-toggle="modal" data-target="#modalLRForm">
                    Entre ou Cadastre-se
                </button>
            </a>




    </div>
    <!-- FIM Lista de Itens -->

    </nav>
    <!-- FIM NAVBAR -->


<!--Mask-->
<div id="intro" class="view">

    <div class="mask rgba-black-light">

        <div class="container-fluid d-flex align-items-center justify-content-center h-100  text-center">

            <div class="col-lg-5 col-md-12">



                    <!-- Heading -->
                    <h1 class="white-text pt-5 mb-2 font-weight-bold">Empresas especializadas a sua disposição</h1>

                    <!-- Divider -->
                    <hr class="hr-light">

                    <!-- Description -->
                    <h4 class="white-text my-4">Encontre alguem para fazer o serviço que você precisa.</h4>



                    <div class="text-center mt-4">
                      <a class="btn btn-primary btn-lg" href="/servico"> <i class="fas fa-search"></i> PROCURAR SERVIÇOS</a>
                    </div>


                 <!--  <div class="text-center">
                    <button type="button" class="btn btn-outline-primary waves-effect" data-toggle="modal" data-target="#exampleModal">NÃO SEI MEU CEP</button>
                  </div>   -->




                </div>
            </div>
        </div>
    </div>
</div>
    <!-- FIM Mask-->

  </header >


<!--Main layout-->
<main class="mt-5" >
    <div class="container">

        <!--Section: COMO FUNCIONA-->
        <section id="como-funciona" class="text-center" >

          <!-- Heading -->
          <h2 class="mb-5 font-weight-bold">Como Funciona</h2>

          <!--Grid row-->
          <div class="row d-flex justify-content-center mb-4">

              <!--Grid column-->
              <div class="col-md-8">

                  <!-- Descrição -->
                  <h5>Busque empresas qualificadas para resolver um problema doméstico, sem a necessidade de sair de casa.</h5>

              </div>
              <!--Grid column-->

          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

              <!--Grid column-->
              <div class="col-md-4 mb-1" >
                  <i class="far fa-grin-beam fa-4x blue-text"></i>
                  <h4 class="my-4 font-weight-bold">Facilidade</h4>
                  <p class="grey-text">Com o site sua vida vai ficar fácil, pois vai ser um processo totalmente online, onde você procura um serviço e combina depois com as empresa.</p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-4 mb-1">
                  <i class="fas fa-user-lock fa-4x blue-text"></i>
                  <h4 class="my-4 font-weight-bold">Segurança</h4>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                      assumenda deleniti hic.</p>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-4 mb-1">
                  <i class="far fa-clock fa-4x blue-text"></i>
                  <h4 class="my-4 font-weight-bold" >Rapidez</h4>
                  <p class="grey-text">Faz com que o seu tempo de pesquisa renda mais, pois o site está focado somente em serviços.</p>
              </div>
              <!--Grid column-->

          </div>
          <!--Grid row-->

        </section>
        <!--Section: COMO FUNCIONA-->


        <hr class="my-5">


        <!--Section: Contact-->
        <section id="contato">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold text-center">Contate-nos</h2>

            <!--Grid row-->
            <div class="row">

            <!--Grid column-->
            <div class="col-lg-12">



                @include('formularios.contato')


            </div>
            <!--Grid column-->


            </div>
            <!--Grid row-->

        </section>
        <!--Section: Contact-->

    </div>

  </main>
  <!--Main layout-->


  <!-- Footer -->
  <footer class="page-footer font-small unique-color-dark pt-4">

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>SDM</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>O SDM tem como objetivo facilitar para os usuários a busca de empresas qualificadas para resolver um problema doméstico, sem a necessidade de sair de casa.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Serviços</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="carros.php">Automotivo</a>
                </p>
                <p>
                    <a href="marcenaria.php">Marcenaria</a>
                </p>
                <p>
                    <a href="encanamento.php">Encanamento</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Descubra</strong>
                </h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#como-funciona">Como funciona</a>
                </p>
                <p>
                    <a href="#contato">Contato</a>
                </p>
            </div>
            <!--/.Third column-->

        </div>
    </div>
    <!--/.Footer Links-->



  </footer>
  <!-- Footer -->

  <!-- /Start your project here-->

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







<?php

//modal login
@include('formularios.login')

?>



</body>

</html>

