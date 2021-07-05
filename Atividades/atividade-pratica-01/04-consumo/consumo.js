// cria array para armazenar cada carro
var carros = []

function cadastrar() {

  let tabela = document.getElementById('tab-cadastro')
  let litros = document.getElementById('qtd-combustivel')
  let km = document.getElementById('qtd-km')

  // calcula o consumo médio a partir dos dados inseridos
  var consumo = Number(km.value) / Number(litros.value)

  // verifica se todos os campos estão preenchidos
  if (litros.value == "" || km.value == "") {
    window.alert('Preencha corretamente todos os dados!')
    litros.value = ""
    km.value = ""
  }

  else {

    tabela.hidden = false

    let linha = document.createElement('tr')
    linha.className = 'linha'

    let col1 = document.createElement('td')
    col1.className = 'coluna'

    let col2 = document.createElement('td')
    col2.className = 'coluna'

    let col3 = document.createElement('td')
    col3.className = 'coluna'

    linha.appendChild(col1)
    linha.appendChild(col2)
    linha.appendChild(col3)

    tabela.appendChild(linha)

    col1.innerHTML = litros.value
    col2.innerHTML = km.value
    col3.innerHTML = consumo.toFixed(1)

    // cria o objeto com os dados de cada carro
    const carro = {
      litrosAbastecidos: litros.value,
      kmPercorridos: km.value,
      consumoMedio: consumo
    }
  
    carros.push(carro)

    litros.value = ""
    km.value = ""
    consumo.value = ""
  }
}

function finalizar() {

  var somaLitros = 0
  var somaKm = 0
  var somaConsumo = 0
  var contador = 0

  // calcula os parâmetros totais a partir de cada carro
  for (i in carros) {
    somaLitros += Number(carros[i].litrosAbastecidos)
    somaKm += Number(carros[i].kmPercorridos)
    somaConsumo += Number(carros[i].consumoMedio)
    contador++
  }

  var mediaLitros = somaLitros / contador
  var mediaKm = somaKm / contador
  var mediaConsumo = somaConsumo / contador

  // cria o alert para exibir os resultados finais
  window.alert(`
  Total de combustível utilizado: ${somaLitros.toFixed(2)}
  Total de km's percorridos ${somaKm.toFixed(2)}
  Média de consumo de combustível ${mediaLitros.toFixed(2)}
  Media de km's rodados: ${mediaKm.toFixed(1)}
  Media de desempenho (km/l): ${mediaConsumo.toFixed(2)}`)
}

