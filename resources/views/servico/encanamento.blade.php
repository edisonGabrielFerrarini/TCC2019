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

<section class="text-center">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center">Encanamento</h2>
  <!-- Section description -->
  <p class="grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

  @foreach ( $registro as $valor )

  <div class="bloco">
      <div>
          <img  class="imagem rounded float-left img-fluid" src="{{asset("storage/$valor->img_servico")}} ">
      </div>

      <div class="empresa">
          <div>
                <h1>{{ $valor->razao_social }}</h1>
          </div>
          <div>
                <h5>{{ $valor->desc }}</h5>
          </div>
                <div></div>
          <div class="conhecer">
            <div>
                <a class="btn btn-primary" href="/empresa/{{ $valor->id_servico }}">CONHECER EMPRESA</a>
            </div>
          </div>
      </div>
  </div>
  <div class="linha"></div>

  @endforeach


  <div class="pag">
      {{ $registro->links() }}
  </div>


  <!-- Grid row -->

        <!-- Description -->


        <!-- Card footer -->
        <div class="card-footer px-1">


          <span class="float-right">

          </span>
        </div>
      </div>
      <!-- Card content -->
    </div>
    <!-- Card -->
  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->





</section>
<!-- Section: Products v.1 -->

</div>





 <script type="text/javascript" src="js/validar.js"></script>
</body>
</html>
