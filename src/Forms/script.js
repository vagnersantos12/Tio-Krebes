const botao = document.querySelector('button')
const inputs = document.querySelectorAll('.forms input')

function adicionaStyleErro() {
  botao.addEventListener('click', verificaInput)

  function verificaInput(evento) {
    evento.preventDefault()

    inputs.forEach(input => {
      if (input.value.length === 0) {
        const div = input.parentElement
        const span = input.nextElementSibling

        div.classList.add('error-icon')
        input.classList.add('error')
        span.style.display = 'block'
      }
    })
  }
}
adicionaStyleErro()

function removeStyleErro() {
  inputs.forEach(input => {
    input.addEventListener('click', () => removeErro(input))
  })

  function removeErro(input) {
    const div = input.parentElement
    const span = input.nextElementSibling

    div.classList.remove('error-icon')
    input.classList.remove('error')
    span.style.display = 'none'
  }
}
removeStyleErro()

function calcilaConta() {
  alert('Entre no grupo...')
}
let botaoEl = document.querySelector('Vaga')
botaoEl.addEventListener('click', acessandovaga)
