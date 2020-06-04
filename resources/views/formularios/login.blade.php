

<!-- MODAL LOGIN -->

<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" >
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-item nav-tabs md-tabs tabs-2 light-blue" role="tablist">

          <li class="nav-item">
            <a class=" nav-link active black-text" data-toggle="tab" href="#panel7" role="tab">Entrar</a>
          </li>

          <li class="nav-item">
            <a class="nav-link black-text" data-toggle="tab" href="#panel8" role="tab">Cadastrar</a>
          </li>

        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">

              <form class="needs-validation" novalidate>
              
                <div class="md-form form-sm mb-5">
                  <i class="fas fa-envelope prefix"></i>
                  <input type="email" id="modalLRInput10" class="form-control form-control-sm validate" required>
                  <label data-error="inválido" data-success="válido" for="modalLRInput10">Seu E-mail</label>
                </div>

                <div class="md-form form-sm mb-4">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" required>
                  <label  data-error="inválido" data-success="válido" for="modalLRInput11">Sua Senha</label>
                </div>

                <div class="text-center mt-2">
                  <button class="btn btn-info">Entrar<i class="fas fa-sign-in ml-1"></i></button>
                </div>

              </form>


            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Esqueceu sua <a href="#" class="blue-text">Senha?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Fechar</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
            <div class="modal-body">

             <form class="needs-validation" novalidate>
              
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" required>
                <label  data-error="inválido" data-success="válido" for="modalLRInput12">Seu E-mail</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" required>
                <label  data-error="inválido" data-success="válido" for="modalLRInput13">Sua Senha</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput14" class="form-control form-control-sm validate" required>
                <label  data-error="inválido" data-success="válido" for="modalLRInput14">Repita sua Senha</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info">Cadastrar <i class="fas fa-sign-in ml-1"></i></button>
              </div>

             </form>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Fechar</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>


<!-- MODAL LOGIN -->