var range = document.getElementById('numero'),
    value = document.getElementById('numeroValue');
let cancelButton = document.getElementById('cancel');

range.addEventListener('input', function() {
  value.textContent = this.value;
});

cancelButton.addEventListener("click", function() {
  value.innerText = '300';
})