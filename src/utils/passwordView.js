let input = document.getElementById('senha');
let buttonEye = document.getElementById('buttonEye');
let stateImg = true;

function trocaImagem() {
  return this.stateImg = !this.stateImg;
}

buttonEye.addEventListener('click', (stateImg) => {
  stateImg = trocaImagem();

  if(stateImg) {
    buttonEye.setAttribute('src', './src/assets/icons/eye.svg');
    input.setAttribute('type', 'text');
  } else {
    buttonEye.setAttribute('src', './src/assets/icons/eye-off.svg');
    input.setAttribute('type', 'password');
  }
});