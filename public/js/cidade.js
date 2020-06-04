// javascript form submit

function submitform() {

teste = document.myform.submit();

alert(teste);

}



function campina(){

        if (cidade == "Colombo"){
            alert("servico disponivel");
        } else {
            alert("serviço não disponivel");
        }


    }
    

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            
             cidade =(conteudo.localidade);
             campina();

            
        } //end if.
        else {
            //CEP não Encontrado.
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep() {

        //Nova variável "cep" somente com dígitos.
        // var cep = valor.replace(/\D/g, '');
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {


                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                alert("Formato de CEP inválido.");
            }
        } //end if.

    };