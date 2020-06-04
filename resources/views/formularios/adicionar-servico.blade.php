<!-- ADICIONAR SERVICO -->

<form class="border border-light p-5" method="post" action="{{ route('criar.servico.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="row-lg-6 row-md-6 row-sm-3">

      <div class="col-lg col-md col-sm">
        <div class="md-form mb-4"> <i class="fas fa-clipboard prefix"></i>
          <input type="text"  class="form-control-sm" name='tipo_servico' required>
          <label>Nome do Serviço</label>
        </div>
      </div>



      <div class="col-lg col-md col-sm">
        <label for="select">Categoria do Serviço:</label>
          <select class="browser-default custom-select mb-4" name='categoria' required>
              <option value="" disabled selected>Escolha uma Categoria</option>
              <option value="Automotivo">Automotivo</option>
              <option value="marcenaria">Marcenaria</option>
              <option value="residencia">Residencia</option>
              <option value="venda">Vendas</option>
              <option value="assistencia_em_ti">Assistência em TI</option>
              <option value="contabilidade">Contabilidade</option>
              <option value="jardinagem">Jardinagem</option>
              <option value="elétrica">Elétrica</option>
              <option value="saúde">Saúde</option>
          </select>
      </div>


      <div class="col-lg col-md col-sm">
        <div class="md-form mb-5">
          <p class="card-text"> Adicionar imagem do serviço:</p>
          <div class="custom-file">
                <input type="file" name="img" class="custom-file-input" value="" required>
                <input type="hidden" name='_token' value="{{ csrf_token() }}">
                <label class="custom-file-label" for="fileInput">Arquivo</label>
            </div>
        </div>
      </div>


      <div class="col-lg col-md col-sm">
        <div class="md-form mb-5">
            <i class="fas fa-pencil-alt prefix"></i>
            <textarea type="text"  class="md-textarea form-control-sm" rows="4" name='desc' required></textarea>
            <label>Descrição do Serviço</label>
        </div>
      </div>

      <div class="col-lg col-md col-sm">
        <div class="md-form mb-4">
          <input type="number"  class="form-control-sm" name='valor' required>
          <label>Valor: </label>
        </div>
      </div>

      <button class="btn btn-info btn-block" type="submit">Enviar</button>

    </div>

  </form>

  <!-- ADICIONAR SERVICO -->
