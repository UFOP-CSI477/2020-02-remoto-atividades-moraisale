// puxa o número inserido no input
function inserir(num) {
  var numero = document.getElementById('result').innerHTML
  document.getElementById('result').innerText = numero + num
}

// função para limpar todos caracteres inseridos quando clicar no botão 'C'
function limpar() {
  document.getElementById('result').innerHTML = ""
}

// função para limpar o último caracter inserido quando clicar no botão '<X|'
function limparUltimo() { 
  var numero = document.getElementById('result').innerHTML
  // método .substring reduz o tamanho da string através do valor passado em parâmetro
  // fonte: https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/String/substring
  document.getElementById('result').innerHTML = numero.substring(0, numero.length -1) 
  
}

function calcular() {
  var numero = document.getElementById('result').innerHTML
  if (numero){
    // a função eval() calcula uma expressão representada como string e retorna o valor dessa expressão
    // fonte: https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/Global_Objects/eval
    document.getElementById('result').innerHTML = eval(numero)
  }
  else{
    document.getElementById('result').innerHTML = 'Vazio!'
  }
}