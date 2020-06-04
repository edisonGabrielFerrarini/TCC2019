             <!-- Form Configurações -->

             <form class="border border-light p-5 needs-validation" method="post" action="{{ route('criar.contato.store') }}">

                {{ csrf_field() }}



                    <div class="md-form"> <i class="fab fa-whatsapp prefix"></i>

                      <input type="text"  class=" form-control-sm" name='whats' >
                      <label>Whatsapp</label>

                    </div>

                    <div class="md-form"> <i class="fas fa-envelope prefix"></i>

                      <input type="text"  class=" form-control-sm" name="email">
                      <label>Email para Contato</label>

                    </div>

                    <div class="md-form "> <i class="fab fa-facebook prefix"></i>

                      <input type="text"  class="form-control-sm"  name='facebook'>
                      <label>Facebook</label>

                    </div>

                    <div class="md-form "> <i class="fab fa-twitter-square prefix"></i>

                      <input type="text"  class="form-control-sm" name="twitter">
                      <label>Twitter</label>

                    </div>

                    <div class="md-form "> <i class="fab fa-instagram prefix"></i>

                      <input type="text"  class="form-control-sm" name="instagram">
                      <label>Instagram</label>

                    </div>


                    <button type="submit" class="btn btn-success">CONFIRMAR</button>

                  </form>


              <!-- Form Configurações -->
