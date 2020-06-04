<!-- MODAL NÃO SEI MEU CEP -->

<!-- INICIO MODAL -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">

  <!-- Cabeçalho do Modal -->
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Não sei meu CEP</h5>
  </div>
  <!-- Fim Cabeçalho do Modal -->

      <!-- Corpo do Modal -->
      <div class="modal-body">
        
      <!-- Formulário do Endereço -->
      <form class="needs-validation text-center border-light p-5" novalidate>
        <div class="form-row">
          
          <div class="form-group col-md-4">
            <!-- Selecionar o Estado -->
            <label class="sr-only">Estado</label>
            <select id="inputEstado" class="form-control browser-default  mb-4" required>
              <option selected>PR</option>
              <option>         RJ</option>
              <option>         SP</option>
            </select>
          </div>

          <div class="form-group col-md-8">
            <!-- Selecionar a Cidade -->
            <label class="sr-only">Cidade</label>
            <select id="inputCidade" class="form-control" required>
              <option selected>Campina Grande do Sul</option>
              <option>Curitiba</option>
              <option>Quatro Barras</option>
            </select>
          </div>
         
          <div class="form-group col-md-10">
            <!-- Digitar o Endereço -->
            <label class="sr-only">Endereço</label>
            <input type="text" class="form-control" id="inputEndereco" placeholder="Endereço" required>
          </div>

          <div class="form-group col-md-2">
            <!-- Digitar o Número -->
            <label class="sr-only">Número</label>
            <input pattern="[0-9]+$" class="form-control" id="inputNumero" placeholder="Nº" required>
          </div>

        </div>

        <button type="submit" class="btn btn-primary mb-2">Buscar</button>
      </form>
      <!-- Fim do Formulário do Endereço -->

      </div>
      <!-- Fim do Corpo do Modal -->


      <!-- Rodapé do Modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Voltar</button>
      </div> 
      <!-- Rodapé do Modal -->

  </div>
 </div>
</div>

<!-- MODAL NÃO SEI MEU CEP -->