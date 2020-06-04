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
  <h2 class="h1-responsive font-weight-bold text-center">{{ mb_strtoupper($tipos_de_servico->tipo_servico) }}</h2>
  <!-- Section description -->
  <p class="grey-text text-center w-responsive mx-auto mb-5">{{ $tipos_de_servico->tipos_servico_descricao }}</p>


    @if($registro[0] == null)

        <h2>Não há serviços cadastrados.</h2>

    @endif


  @foreach ( $registro as $valor )


  <div class="container">
    <div class="card mb-5">
        <div class="row no-gutters">
            <div class="col-md-4">
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


  <div class="pag">
      {{ $registro->links() }}
  </div>


  <!-- Grid row -->

        <!-- Description -->


        <!-- Card footer -->

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
