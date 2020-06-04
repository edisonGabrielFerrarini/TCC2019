<div class="container demo">
    <div class="modal left fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">

                    <a class="navbar-brand black-text " href="/"><img src=" {{asset('img/logo1.png')}} " width="90" class="img-fluid"></a>

                </div>


                <div class="modal-body">

                    <form class="md-form" action=" {{ url('/servico/buscar') }} " method="POST">
                        {{ csrf_field() }}
                        <div class="my-0">
                            <input class="form-control mr-sm-2" type="text" name="busca" placeholder="Buscar serviço" aria-label="Buscar serviço">
                        </div>
                    </form>

                    <div class="nav flex-sm-column flex-row">
                        <a class="nav-item nav-link active" href="/">Inicio</a>

                            <div class="accordion" id="accordionExample">

                                <a class="nav-item nav-link" data-toggle="collapse"
                                data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Categorias
                                </a>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                  data-parent="#accordionExample">
                                  <div>

                                    <a class="nav-item nav-link" href="">Automotivo</a>
                                    <a class="nav-item nav-link" href="">Marcenaria</a>
                                    <a class="nav-item nav-link" href="">Encanamento</a>
                                    <a class="nav-item nav-link" href="">Administração</a>
                                    <a class="nav-item nav-link" href="">Assistência de TI</a>
                                    <a class="nav-item nav-link" href="">Elétrica</a>
                                    <a class="nav-item nav-link" href="">Financeiro</a>
                                    <a class="nav-item nav-link" href="">Jardinagem</a>
                                    <a class="nav-item nav-link" href="">Saúde</a>


                                  </div>

                                </div>




                            </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
    </div>
</div>
