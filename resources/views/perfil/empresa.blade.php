<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Adaptação para Mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Sidenav CSS-->
  <link rel="stylesheet" type="text/css" href="css/sidenav.css">

  <!-- Conteudo CSS -->
  <link rel="stylesheet" type="text/css" href="css/conteudo.css">

  <!-- Pagina do Usuário CSS -->
  <link rel="stylesheet" type="text/css" href="css/pagina_usuario.css">

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

  <style type="text/css">


    /*Mobile*/
    @media (max-width: 575.98px) {
      .desktop { display: none; }
    }

    /*Tablet*/
    @media (min-width: 768px) {
      .desktop { display: none; }
    }

    /*Monitores Menores*/
    @media (min-width: 991.98px) {
      .mobile { display: none; }
      .desktop { display: block; }
    }

    /*Desktop*/
    @media (min-width: 1199.98px) {
      .mobile { display: none; }
      .desktop { display: block; }
    }



  </style>

</head>
<body>

@include('resource.navbar')

@include('resource.sidenav')

@include('formularios.login')


<!-- MOBILE -->

<div class="container">
  <div class="row">
    <div class="col-sm">



<div id="conteudo" class="mobile">

   <nav class="navbar">

     <!--Section: Card-->
    <section class="ml-3 mt-3 pb-3">


            <!--Card-->
            <div class="card card-personal mb-4">

              <!--Card image-->
              <div class="view">
                <img alt="thumbnail" class="img-thumbnail mx-auto"src="img/1.png" alt="Card image cap" style="width:150px; height: 150px;">
                <a href="#"> <div class="mask rgba-white-slight"></div> </a>
              </div>
              <!--Card image-->

              <!--Card content-->
              <div class="card-body">

                <!--Title-->
                <h4 class="card-title">John 117</h4>

              </div>
              <!--Card content-->

            </div>
            <!--Card-->

    </section>
    <!--Section: Card-->


    <button type="button" class="btn-md btn-primary btn" data-toggle="modal" data-target="#modalEditarPerfil">Editar Perfil</button>




  </nav>


  <div class="accordion" id="accordionExample">
    <div class="card z-depth-0 bordered">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-user-cog prefix"></i> Alterar Dados Cadastrais
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
        data-parent="#accordionExample">
        <div class="card-body">
          <h4>Alterar Dados Cadastrais</h4>

          @include ('formularios.configuracoes')

        </div>
      </div>
    </div>
    <div class="card z-depth-0 bordered">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user-tie prefix"></i> Alterar Endereço
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <h4>Alterar Endereço</h4>

            @include('formularios.alterar-endereco')

        </div>
      </div>
    </div>
    <div class="card z-depth-0 bordered">
      <div class="card-header" id="headingTree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
            data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-envelope-open-text prefix"></i > Formas de Contato
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <h4>Formas de Contato</h4>

            @include('formularios.forma-contato')

        </div>
      </div>
    </div>
    <div class="card z-depth-0 bordered">
      <div class="card-header" id="headingFour">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
            data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-envelope-open-text prefix"></i> Adicionar Serviço
          </button>
        </h5>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
        <div class="card-body">
          <h2 class="mt-3 font-weight-bold text-center">Adicionar Serviço</h2>
          @include('formularios.adicionar-servico')
        </div>
      </div>
    </div>
    <div class="card z-depth-0 bordered">
        <div class="card-header" id="headingFive">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                <i class="fas fa-envelope-open-text prefix"></i> Editar Perfil
            </button>
            </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body">
            <h2 class="mt-3 font-weight-bold text-center">Editar Perfil</h2>
            @include('formularios.editar_perfil_empresa')
            </div>
        </div>
    </div>

    <div class="card z-depth-0 bordered">
        <div class="card-header" id="headingSix">
            <h5 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                <i class="fas fa-envelope-open-text prefix"></i> Envie um Feedback
            </button>
            </h5>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body">
            <h2 class="mt-3 font-weight-bold text-center">Envie um Feedback</h2>
            @include('formularios.contato')
            </div>
        </div>
    </div>
  </div>

</div>
<!-- ./MOBILE -->

    </div>



<div class="col-md-12">

<!-- DESKTOP -->
<div id="conteudo" class="desktop ">
  <div class="container z-depth-1-half" id="desktop">

    <div class="row ">


      <div class="col-12">


        <div class="row blue darken-1">

          <div class="col-12">

             <nav class="navbar">

               <!--Section: Card-->
                <section class="ml-2 mt-3 pb-3">

                  <!--Card group-->
                  <div class="card-group">

                    <div class="col-2">
                        <!--Card-->
                        <div class="card card-personal mb-4">

                          <!--Card image-->
                          <div class="view">
                            <img alt="thumbnail" class="img-thumbnail mx-auto"src="{{ asset('img/carro1.png') }}" alt="Card image cap" style="width: 150px; height: 150px;">
                            <a href="#"> <div class="mask rgba-white-slight"></div> </a>
                          </div>
                          <!--Card image-->

                        </div>
                        <!--Card-->
                    </div>



                    <div class="col col-centered">
                      <!--Card-->

                        <div class="card">

                          <!--Card content-->
                          <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"> {{ auth()->User()->razao_social }} </h4>
                            <!--Text-->
                            <p class="card-text"> {{ auth()->User()->desc_empresa}} </p>
                          </div>

                        </div>
                        <!--/.Card-->
                    </div>

                </section>
                <!--Section: Card-->






            </nav>
          </div>

        </div>

        <div class="row">
          <div class="col-3" id="desktop-list">

             <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-1-list" data-toggle="list" href="#list-1"
                  role="tab" aria-controls="1"><i class="fas fa-user-cog prefix"></i> Alterar Dados</a>
                <a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list" href="#list-2"
                  role="tab" aria-controls="2"><i class="fas fa-home prefix"></i></i> Alterar Endereço</a>
                <a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list" href="#list-3"
                  role="tab" aria-controls="3"><i class="far fa-comment-dots prefix"></i></i> Formas de Contato</a>
                <a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list" href="#list-4"
                role="tab" aria-controls="4"><i class="fas fa-plus prefix"></i> Adicionar Serviço</a>
                <a class="list-group-item list-group-item-action" id="list-5-list" data-toggle="list" href="#list-5"
                role="tab" aria-controls="5"><i class="fas fa-plus prefix"></i> Editar Perfil</a>
                <a class="list-group-item list-group-item-action" id="list-6-list" data-toggle="list" href="#list-6"
                role="tab" aria-controls="6"><i class="fas fa-envelope-open-text prefix"></i> Envie um Feedback</a>
              </div>

          </div>

          <div class="col-9">

          <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-1-tab">

             <h4 class="mt-3 font-weight-bold text-center">Alterar Dados</h4>


             @include('formularios.configuracoes')


            </div>

            <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-2-tab">

              <h2 class="mt-3 font-weight-bold text-center"> Alterar Endereço</h2>


                @include('formularios.alterar-endereco')


            </div>

             <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-3-tab">

                <h2 class="mt-3 font-weight-bold text-center"> Atualizar Formas de Contato</h2>

                @include('formularios.forma-contato')

            </div>




            <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-4-tab">

                    <h2 class="mt-3 font-weight-bold text-center"> Adicionar Serviço</h2>

                    @include('formularios.adicionar-servico')

            </div>

            <div class="tab-pane fade" id="list-5" role="tabpanel" aria-labelledby="list-5-tab">

                <h2 class="mt-3 font-weight-bold text-center"> Editar Perfil</h2>

                @include('formularios.editar_perfil_empresa')

            </div>

            <div class="tab-pane fade" id="list-6" role="tabpanel" aria-labelledby="list-6-tab">

                    <h2 class="mt-3 font-weight-bold text-center">Contato</h2>

                    @include('formularios.contato')


            </div>

          </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>
<!-- ./DESKTOP -->

    </div>
  </div>
</div>

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


 <script type="text/javascript">
   $('.btn-expand-collapse').click(function(e) {
        $('.navbar-primary').toggleClass('collapsed');
});
 </script>
</body>
</html>
