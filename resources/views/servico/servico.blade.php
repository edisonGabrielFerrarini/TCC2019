<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

  @include('servico.conf');



</head>
<body>

  @include('resource.navbar')

  @include('resource.sidenav')

  @include('formularios.login')



<div id="conteudo">
  <br>

  <div class="container">
  <!-- Grid row -->
      <div class="row">

          <!-- Grid column -->
          <div class="col-lg-6 col-md-12 mb-lg-0 mb-4">
              <!--Featured image-->
              <div class="view overlay rounded z-depth-1">
                  <img src="{{ asset("storage/$registro->img_servico") }} " class="img-fluid rounded mx-auto d-block">
                  <a>
                      <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--Excerpt-->

                <div class="text-center d-flex align-self-center py-5 px-4">
                    <div>
                        <h2>Preço oferecido: {{$registro->valor}}  reais</h2>
                    </div>
                  </div>


            </div>
            <!-- Grid column -->

            <div class="col-lg-6 col-md-12 mb-sm-3 mb-4">

                <!-- Card -->
                <div class="card">

                    <!-- Content -->
                    <div class="text-center d-flex ">
                        <a href="{{ URL::previous() }}"><button type="button" class="btn btn-outline-warning  btn-sm " data-toggle="modal" >voltar</button></a>
                    </div>
                    <div class="text-center d-flex align-self-center py-5 px-4">
                        <div>
                            <h1 class="card-title"><strong>{{ mb_strtoupper($registro->razao_social) }}</strong></h1>
                            <h3 class="card-title pt-1">{{ $registro->tipo_servico }}</h3>
                                <p >{{$registro->desc_servico}}</p>

                            </div>
                        </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card">

              <!-- Content -->
              <div class="d-flex align-items-center py-4 px-4">
                <div>

                    <button type="button" class="btn btn-outline-success  btn-lg" data-toggle="modal" data-target="#modalContatoEmpresa">Mostrar Contatos</button>

                    <a href="/pagina/{{$registro->id}}"><button type="button" class="btn btn-outline-info  btn-lg">Perfil da Empresa</button></a>


                </div>
              </div>

            </div>
            <!-- Card -->


      </div>
      <!-- Grid row -->

  </div>
  <!-- Container -->


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



<!-- INICIO MODAL -->
<div class="modal fade" id="modalContatoEmpresa" tabindex="-1" role="dialog" aria-labelledby="modalContatoLabel" aria-hidden="true">
 <div class="modal-dialog modal-lg" role="document">
  <div class="modal-content">

     <!-- Corpo do Modal -->
      <div class="modal-body">


        <ul class="list-group list-group-flush">

            <li class="list-group-item" ><h4><i class="fab fa-whatsapp"></i> Whatsapp:</h4>      <h1>{{ $registro->whats }}</h1> </li>


            <li class="list-group-item"><h4><i class="fas fa-envelope"></i> E-Mail:</h4>     <h1>{{ $registro->email }}</h1> </li>


            <li class="list-group-item"><h4><i class="fab fa-facebook-square"></i> Facebook</h4>    <h1>{{ $registro->facebook }}</h1> </li>


            <li class="list-group-item"><h4><i class="fab fa-twitter-square"></i> Twitter:</h4>      <h1>{{ $registro->twitter }}</h1> </li>


            <li class="list-group-item"><h4><i class="fab fa-instagram"></i> Instagram:</h4>     <h1>{{$registro->instagram}}</h1></li>

        </ul>



      </div>
     <!-- Fim do Corpo do Modal -->


  </div>
 </div>
</div>
<!-- FIM MODAL -->


 <script type="text/javascript" src="js/validar.js"></script>


 <script>new ClipboardJS('button');</script>
</body>
</html>
