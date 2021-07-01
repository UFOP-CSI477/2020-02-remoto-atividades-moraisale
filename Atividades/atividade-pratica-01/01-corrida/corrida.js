var competidores = []

function cadastrar() {
  let tabela = document.getElementById('tab-resultado')
  let linhas = tabela.getElementsByTagName('tr')

  let largada = document.getElementById('largada')
  let nomeCompetidor = document.getElementById('competidor')
  let tempo = document.getElementById('tempo')

  if (linhas.length < 6) {
    if (largada.length == 0 || nomeCompetidor.length == 0 || tempo.length == 0) {
      window.alert('Preencha os campos corretamente!')

      document.getElementById("largada").value = ""
      document.getElementById("nomeCompetidor").value = ""
      document.getElementById("tempo").value = ""
    } 
    else {
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

      col1.innerHTML = start
      col2.innerHTML = competitor
      col3.innerHTML = time
      col4.innerHTML = 'a'
      col5.innerHTML = 'b'

      const competidor = {
        largada: largada,
        nomeCompetidor: nomeCompetidor,
        tempo: tempo,
      }

      competidores.push(competidor)

      largada.value = ""
      nomeCompetidor.value = ""
      tempo.value = ""

    }



  
function finalizar () { 

}