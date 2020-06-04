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

    @include('formularios.editar_perfil')




<!-- MOBILE -->
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
            <i class="fas fa-user-cog prefix"></i> Configurações
          </button>
        </h5>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
        data-parent="#accordionExample">
        <div class="card-body">
          <h4>Configurações</h4>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>
      </div>
    </div>
    <div class="card z-depth-0 bordered">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-check-double prefix"></i> Ativar Conta
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <h2 class="mt-3 font-weight-bold text-center">Ativar Conta</h2>
            @include('formularios.ativar_conta')
        </div>
      </div>
    </div>
    <div class="card z-depth-0 bordered">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <i class="fas fa-user-tie prefix"></i> Ultimos Contratos
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <h4>Ultimos Contratos</h4>
          <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        </div>
      </div>
    </div>
    <div class="card z-depth-0 bordered">
      <div class="card-header" id="headingFour">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <i class="fas fa-envelope-open-text prefix"></i> Envie uma Reclamação
          </button>
        </h5>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
        <div class="card-body">
          <h2 class="mt-3 font-weight-bold text-center">Contato</h2>
                @include('formularios.contato')
        </div>
      </div>
    </div>
  </div>

</div>
<!-- ./MOBILE -->



<!-- DESKTOP -->
<div id="conteudo" class="desktop">
  <div class="container fullscreen z-depth-1-half" id="desktop">

    <div class="row ">


      <div class="col-12">


        <div class="row blue darken-1">

          <div class="col-12">

             <nav class="navbar">

               <!--Section: Card-->
                <section class="ml-3 mt-3 pb-3">


                        <!--Card-->
                        <div class="card card-personal mb-4">

                          <!--Card image-->
                          <div class="view">
                            <img alt="thumbnail" class="img-thumbnail mx-auto"src="img/1.png" alt="Card image cap" style="width: 150px; height: 150px;">
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

          </div>

        </div>

        <div class="row">
          <div class="col-3" id="desktop-list">

             <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-1-list" data-toggle="list" href="#list-1"
                  role="tab" aria-controls="1"><i class="fas fa-user-cog prefix"></i> Configurações</a>
                <a class="list-group-item list-group-item-action" id="list-2-list" data-toggle="list" href="#list-2"
                  role="tab" aria-controls="2"><i class="fas fa-check-double prefix"></i> Ativar Conta</a>
                <a class="list-group-item list-group-item-action" id="list-3-list" data-toggle="list" href="#list-3"
                  role="tab" aria-controls="3"><i class="fas fa-user-tie prefix"></i> Ultimos Contratos</a>
                <a class="list-group-item list-group-item-action" id="list-4-list" data-toggle="list" href="#list-4"
                  role="tab" aria-controls="4"><i class="fas fa-envelope-open-text prefix"></i> Envie uma Reclamação</a>
              </div>

          </div>

          <div class="col-9">

          <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="list-1-tab">

             <h4>Configurações</h4>
             <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

            </div>

            <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="list-2-tab">

              <h2 class="mt-3 font-weight-bold text-center">Ativar Conta</h2>
                    @include('formularios.ativar_conta')

            </div>

            <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="list-3-tab">
               <h4>Ultimos Contratos</h4>
               <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>

            <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="list-4-tab">

              <h2 class="mt-3 font-weight-bold text-center">Contato</h2>
                    @include('formularios.contato');

            </div>

          </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>
<!-- ./DESKTOP -->

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
