
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg blue-gradient fixed-top">


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars fa-lg"></i></i></span>
    </button>

    <div class="row justify-content-start">
        <a id="sumir" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-bars fa-lg ml-4 mr-4"></i>
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link white-text" href="/servico">Serviços</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link white-text" href="/register">Cadastre sua Empresa</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link white-text" href="#">Contato</a>
                        </li>


                    </ul>


                    @if(auth::check())
                        <a class="btn-md btn-yellow btn mr_auto" href="/home" > Anuncie seu serviço </a>
                    @else
                        <a class="btn-md btn-yellow btn mr_auto" href="/login" > Anuncie seu serviço </a>
                    @endif




                    @if (auth::check())
                    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user white-text"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-default"
                            aria-labelledby="navbarDropdownMenuLink-333" >

                            <a class="dropdown-item" href="/home">Minha conta</a>

                        <a class="dropdown-item" href="{{ url('logout') }}">  Sair</a>

                            </div>
                        </li>
                       </ul>
                    @endif
        </div>

</nav>
<!-- FIM NAVBAR -->


<!-- ESQUECEU DE ADICIONAR O JAVASCRIPT DO DROPDOWN -->
<script>
  $('.dropdown-toggle').dropdown()
</script>





s
