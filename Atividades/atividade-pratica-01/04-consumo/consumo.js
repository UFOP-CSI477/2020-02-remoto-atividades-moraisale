var carros = []

function cadastrar() {

  let tabela = document.getElementById('tab-cadastro')
  let litros = document.getElementById('qtd-combustivel')
  let km = document.getElementById('qtd-km')

  var consumo = Number(km.value) / Number(litros.value)

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
    col3.innerHTML = consumo

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

  for (i in carros) {
    somaLitros += Number(carros[i].litrosAbastecidos)
    somaKm += Number(carros[i].kmPercorridos)
    somaConsumo += Number(carros[i].consumoMedio)
  }
  window.alert(`Total de litros abastecidos: ${somaLitros} Total de km's percorridos ${somaKm} Total de consumo ${somaConsumo}`)

}

