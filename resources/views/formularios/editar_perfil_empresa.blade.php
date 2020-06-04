
                     <!-- Formulário do Endereço -->
                     <form method="post" action="/home/endereco">
                    {{ csrf_field() }}

                       <div class="md-form form-sm mb-5">
                         <i class="fas fa-user-tag prefix"></i>
                         <input type="email" id="modalLRInput10" class="form-control form-control-sm">
                         <label data-error="inválido" data-success="válido" for="modalLRInput10">Alterar Nome</label>
                       </div>

                       <div class="md-form mb-4">

                               <span class="input-group-text">Adicionar Imagem</span>

                           <div class="custom-file">
                               <input type="file" class="custom-file-input">
                               <label class="custom-file-label" for="fileInput">Arquivo</label>
                           </div>
                       </div>
                       <br>

                        <div class="md-form form-sm mb-5">
                         <i class="fas fa-pencil-alt prefix"></i>
                         <textarea type="text"  class="md-textarea form-control-sm" rows="4" name="desc_empresa"></textarea>
                         <label data-error="inválido" data-success="válido" for="modalLRInput10">Descrição da Empresa</label>
                       </div>

                       <div class="text-center mt-2">
                         <button class="btn btn-info">Confirmar</button>
                       </div>

                     </form>
