var transacoes = []

function enviar() {

  var tipoChave = document.getElementById('select-chave')
  var operacao = document.getElementById('select-operacao')
  var banco = document.getElementById('select-banco')
  var chave = document.getElementById('chave')
  var valor = document.getElementById('valor')
  var data = document.getElementById('data')

  if (chave.value == 0 || valor.value == 0 || data.value == 0) {
    window.alert('Preencha corretamente todos os dados!')
  }

  else {
    const transacao = {
    infoOperacao: operacao.value,
    infoValor: valor.value,
  }
  
  transacoes.push(transacao)

  window.alert('Transação efetuada!')

  chave.value = ""
  valor.value = ""
  data.value = ""
  }
  
}

function finalizar () {

  var numeroEnviados = document.getElementById('exibe-enviado')
  var numeroRecebidos = document.getElementById('exibe-recebido')

  var saldoFinalEnviado = document.getElementById('exibe-saldo-enviado')
  var saldoFinalRecebido = document.getElementById('exibe-saldo-recebido')

  var contadorEnviados = 0
  var contadorRecebidos = 0

  var somaEnviados = 0
  var somaRecebidos = 0

  for(i in transacoes){

    if(transacoes[i].infoOperacao == 'Pagar'){
      contadorEnviados++
      numeroEnviados.innerHTML = `Numero de transações: ${contadorEnviados}`

      somaEnviados += Number(transacoes[i].infoValor)
      saldoFinalEnviado.innerHTML = `Saldo enviado acumulado: ${somaEnviados}`
    }
    else if(transacoes[i].infoOperacao == 'Receber') {
      contadorRecebidos++
      numeroRecebidos.innerHTML = `Numero de transações: ${contadorRecebidos}`
      
      somaRecebidos += Number(transacoes[i].infoValor)
      saldoFinalRecebido.innerHTML = `Saldo recebido acumulado: ${somaRecebidos}`
    }

  }
    

    var saldoTotal = document.getElementById('saldo-total')
    var soma = somaRecebidos - somaEnviados
    saldoTotal.innerHTML = `Controle Pix - Seu saldo atual: R$${soma}`

}

function limparSelect(campo) {
  while (campo.length > 1) {
      campo.remove(1);
  }
}

function preencherBancos(data) {
  let listaBancos = document.getElementById("select-banco");
  // limparSelect(listaBancos)

  for (i in data) {
      const { isbp, code, fullName } = data[i];
      let option = document.createElement("option");

      option.value = isbp;
      option.innerHTML = `${code}-${fullName}`;
      listaBancos.appendChild(option);
  }
}

function carregarBancos() {
  fetch("https://brasilapi.com.br/api/banks/v1")
        .then(response => response.json())
        .then(data => preencherBancos(data))
}


