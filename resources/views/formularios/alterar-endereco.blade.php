<h4 class="mt-3 text-center"> Alterar Endereço</h4>


<form class="p-3" method="post" action="/home/endereco">

{{ csrf_field() }}

 <div class="md-form"> <i class="fas fa-road prefix"></i>

   <input type="text"  class=" form-control-sm" name="endereco">
   <label>Endereço</label>

 </div>

 <div class="md-form"> <i class="fas fa-home prefix"></i>

   <input type="text"  class=" form-control-sm" name="bairro">
   <label>Bairro</label>

 </div>

 <div class="md-form"> <i class="fas fa-sort-numeric-down prefix"></i>

   <input type="text"  class=" form-control-sm" name="numero">
   <label>Número</label>

 </div>

 <div class="md-form "> <i class="fas fa-map-marker-alt prefix"></i>

   <input type="text"  class="form-control-sm" name="cep">
   <label>CEP</label>

 </div>

 <button type="submit" class="btn btn-success">CONFIRMAR</button>

</form>

