// cria um array para armazenar os competidores
var competidores = []

function cadastrar() {

  let tabela = document.getElementById('tab-inicio')
  let largada = document.getElementById('largada')
  let nomeCompetidor = document.getElementById('competidor')
  let tempo = document.getElementById('tempo')

  // verificação para inserir o nº máximo de competidores
  if (competidores.length > 5) {
    return window.alert('Número máximo de competidores cadastrados!');
  }
  // verificar se todos os campos estão preenchidos.
  if (largada.value === "" || nomeCompetidor.value === "" || tempo.value === "") {
    largada.value = ""
    nomeCompetidor.value = ""
    tempo.value = ""
    return window.alert('Preencha todos os dados!')
    }   
 // criação das linhas e celulas e inserção dos dados na table inicial
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

    // cria o objeto com os dados de cada competidor
    const competidor = {
      largadaRes: largada.value,
      nomeCompetidorRes: nomeCompetidor.value,
      tempoRes: tempo.value,
      resultadoFinal: ""
    }
        
    largada.value = ""
    nomeCompetidor.value = ""
    tempo.value = ""

    return competidores.push(competidor)
  }

// função para ordenar o tempo dos competidores e retornar o vencedor
// https://pt.stackoverflow.com/questions/46600/como-ordenar-uma-array-de-objetos-com-array-sort
function ordernar() {
  competidores.sort((i, j) => (i.tempoRes > j.tempoRes ? 1 : -1))

  for (let i = 0; i < competidores.length; i++) {
    if (competidores[0].tempoRes === competidores[i].tempoRes) {
      competidores[i].resultadoFinal = 'Vencedor(a)'
    } 
  }
}

function finalizar () { 

  var exibe = document.getElementById('tab-resultado')
  var oculta = document.getElementById('tab-inicio')
  exibe.hidden = false
  oculta.hidden = true

  ordernar()
  let tabelaResultado = document.getElementById('tab-resultado')
  var colocacao = 1

  //método para realizar uma ação para cada elemento do array
  competidores.map((competidor) => {

    // criação das linhas e celulas e inserção dos dados na table de resultado
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
    colRes4.innerHTML = colocacao
    colRes5.innerHTML = competidor.resultadoFinal

    tabelaResultado.appendChild(linhaTabelaRes)

    colocacao++
    
  })
}
