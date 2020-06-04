<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

    @include('servico.conf')

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


    <button type="button" class="btn-md btn-primary btn" data-toggle="modal" data-target="#modalContatoEmpresa">Entrar em Contato</button>




  </nav>


  <div class="container">
    <div class="row-sm-12">
      <div class="col-lg-12 col-md-12">

          aaaaaaaaaaaaa
          <!-- INSIRA O CONTEUDO AQUI -->

        </div>

    </div>


  </div>

<!-- ./MOBILE -->

 </div>





<div id="conteudo" class="desktop">
  <div class="container z-depth-1-half" id="desktop">

    <div class="row ">


      <div class="col-lg-12 col-md-12 col-md-6">


        <div class="row blue darken-1">


              <!--Section: Card-->
              <section class="ml-3 mt-3 pb-3">

                <!--Card group-->
                <div class="card-group">

                    <div class="col-lg-2 col-md-2 col-sm-2">

                        <!--Card-->
                        <div class="card card-personal mb-4 ">

                          <!--Card image-->
                          <div class="view">
                            <img alt="thumbnail" class="img-thumbnail mx-auto"src="img/343.png" alt="Card image cap" style="width: 150px; height: 150px;">
                            <a href="#"> <div class="mask rgba-white-slight"></div> </a>
                          </div>
                          <!--Card image-->



                        </div>
                        <!--Card-->

                      </div>
                      <div class="col alling-content">

                        <!--Card-->

                        <div class="card">

                          <!--Card content-->
                          <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"> {{ $usuario->razao_social }} </h4>
                            <!--Text-->
                            <p class="card-text"> {{ $usuario->desc_empresa }} </p>
                          </div>

                        </div>
                        <!--/.Card-->
                      </div>

                      </div>
                      <!--Card group-->


                      <button type="button" class="btn btn-indigo" data-toggle="modal" data-target="#modalContatoEmpresa">Entrar em Contato</button>

                </section>
                <!--Section: Card-->

        </div>

        <div class="col-lg-12 col-md-12">
            <br>
            <h2 class="text-center font-weight-bold"> Todos os nossos serviços </h2>
            <hr>
          @foreach ($servico as $valor)

          <div class="container">
            <div class="card mb-5">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="{{asset("storage/$valor->img_servico")}}" class="img-thumbnail" alt="...">
                    </div>
                    <div class="col-md-8 align-self-center">

                        <div class="card-body">
                            <h2 class="card-title">{{ mb_strtoupper($valor->tipo_servico) }}</h2>
                                <p class="card-text">{{ $valor->desc_servico }}</p>
                                <p class='card-text'>Preço: {{$valor->valor}} reais</p>
                                <a class="btn btn-primary" href="/empresa/{{ $valor->id_servico }}">CONHECER SERVIÇO</a>
                            </div>

                    </div>
                </div>
            </div>
        </div>

          @endforeach





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




<!-- INICIO MODAL -->
<div class="modal fade" id="modalContatoEmpresa" tabindex="-1" role="dialog" aria-labelledby="modalContatoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">

        <!-- Corpo do Modal -->
         <div class="modal-body">


           <ul class="list-group list-group-flush">

               <li class="list-group-item" ><h4><i class="fab fa-whatsapp"></i> Whatsapp:</h4>      <h1>{{ $contatos->whats }}</h1> </li>


               <li class="list-group-item"><h4><i class="fas fa-envelope"></i> E-Mail:</h4>     <h1>{{ $contatos->email }}</h1> </li>


               <li class="list-group-item"><h4><i class="fab fa-facebook-square"></i> Facebook</h4>    <h1>{{ $contatos->facebook }}</h1> </li>


               <li class="list-group-item"><h4><i class="fab fa-twitter-square"></i> Twitter:</h4>      <h1>{{ $contatos->twitter }}</h1> </li>


               <li class="list-group-item"><h4><i class="fab fa-instagram"></i> Instagram:</h4>     <h1>{{$contatos->instagram}}</h1></li>

           </ul>



         </div>
        <!-- Fim do Corpo do Modal -->


     </div>
    </div>
   </div>
   <!-- FIM MODAL -->




 <script type="text/javascript" src="js/validar.js"></script>
</body>
</html>
