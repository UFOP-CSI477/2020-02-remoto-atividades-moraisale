
    function preencherUF(data) {

      function limparUF(campo) {
        while(campo.length > 1) {
          campo.remove(1)
        }
      }

      let estados = document.getElementById('estados')
      limparUF(estados)

      for (let i in data) { 
        
        const { id, nome, sigla } = data[i];

        let opcao = document.createElement('option')
        opcao.value = id;
        opcao.innerHTML = `${nome} - ${sigla}`

        estados.appendChild(opcao);

      }

    }

    function carregarUF(){
       fetch("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
          .then(Response => Response.json())
          .then(data => preencherUF(data))
          .catch(error => console.error(error))
    }
