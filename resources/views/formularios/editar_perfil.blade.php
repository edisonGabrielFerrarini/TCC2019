
                     <!-- Formulário do Endereço -->
                     <form class="md-form" action="/store" enctype="multipart/form-data" method="post">

                       <div class="md-form form-sm mb-5">
                         <i class="fas fa-user-tag prefix"></i>
                         <input id="modalLRInput10" class="form-control form-control-sm validate" required>
                         <label for="modalLRInput10">Alterar Nome</label>
                       </div>

                       <div class="md-form mb-4">

                               <span class="input-group-text">Adicionar Imagem</span>

                           <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" value="">
                                <input type="hidden" name='_token' value="{{ csrf_token() }}">

                               <label class="custom-file-label" for="fileInput">Arquivo</label>
                           </div>
                       </div>
                       <br>
                       <div class="text-center mt-2">
                         <button type="submit" name="button" class="btn btn-info">Confirmar</button>
                       </div>

                     </form>
