function inserir(num) {
  var numero = document.getElementById('result').innerHTML
  document.getElementById('result').innerText = numero + num
}

function limpar() {
  document.getElementById('result').innerHTML = ""
}

function limparUltimo() { 
  var numero = document.getElementById('result').innerHTML
  document.getElementById('result').innerHTML = numero.substring(0, numero.length -1) 
  // método .substring reduz o tamanho da string através do valor passado em parâmetro
  // fonte: https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/String/substring
}

function calcular() {
  var numero = document.getElementById('result').innerHTML
  if (numero){
    document.getElementById('result').innerHTML = eval(numero)
    // a função eval() calcula uma expressão representada como string
    // e retorna o valor dessa expressão
    // fonte: https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/eval 
  }
  else{
    document.getElementById('result').innerHTML = 'Vazio!'
  }
}