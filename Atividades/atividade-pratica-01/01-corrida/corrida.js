var competidores = []

function cadastrar() {

  let tabela = document.getElementById('tab-inicio')
  let linhas = tabela.getElementsByTagName('tr')

  let largada = document.getElementById('largada')
  let nomeCompetidor = document.getElementById('competidor')
  let tempo = document.getElementById('tempo')

  // array comeca contar no 0, então 3 itens vai ate o 2.
  // se tiver mais de (3 itens) ele retorna o erro e para a funcão
  if (competidores.length > 2) {
    return window.alert('Número máximo de competidores cadastrados!');
  }

  // veirifica se todos os campos estão preenchidos.
  if (largada.value === "" || nomeCompetidor.value === "" || tempo.value === "") {
    largada.value = ""
    nomeCompetidor.value = ""
    tempo.value = ""
    return window.alert('Preencha todos os dados!')
    }   


  // se todos os campos estão ok, ele vai add o camarada
    const linhaTabela = document.createElement('tr')
      
    const col1 = document.createElement('td')
    const col2 = document.createElement('td')
    const col3 = document.createElement('td')
    const col4 = document.createElement('td')
    const col5 = document.createElement('td')

    linhaTabela.appendChild(col1)
    linhaTabela.appendChild(col2)
    linhaTabela.appendChild(col3)
    linhaTabela.appendChild(col4)
    linhaTabela.appendChild(col5)

    tabela.appendChild(linhaTabela)

    col1.innerHTML = largada.value
    col2.innerHTML = nomeCompetidor.value
    col3.innerHTML = tempo.value
    col4.innerHTML = "-"
    col5.innerHTML = "-"

    // pegando o value dos campos
    const competidor = {
      largadaRes: largada.value,
      nomeCompetidorRes: nomeCompetidor.value,
      tempoRes: tempo.value
    }
        
    largada.value = ""
    nomeCompetidor.value = ""
    tempo.value = ""

    return competidores.push(competidor)
  }


function finalizar () { 

  let tabelaResultado = document.getElementById('tab-resultado')
  competidores.map(competidor => {
    const linhaTabelaRes = document.createElement('tr')

    const colRes1 = document.createElement('td')
    const colRes2 = document.createElement('td')
    const colRes3 = document.createElement('td')
    const colRes4 = document.createElement('td')
    const colRes5 = document.createElement('td')

   

    linhaTabelaRes.appendChild(colRes1)
    linhaTabelaRes.appendChild(colRes2)
    linhaTabelaRes.appendChild(colRes3)
    linhaTabelaRes.appendChild(colRes4)
    linhaTabelaRes.appendChild(colRes5)

    colRes1.innerHTML = competidor.largadaRes
    colRes2.innerHTML = competidor.nomeCompetidorRes
    colRes3.innerHTML = competidor.tempoRes
    colRes4.innerHTML = "asdasd"
    colRes5.innerHTML = "rererer"

    tabelaResultado.appendChild(linhaTabelaRes)

    
  })
}
