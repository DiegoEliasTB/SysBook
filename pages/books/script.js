var range = document.getElementById('numero'),
    value = document.getElementById('numeroValue');

range.addEventListener('input', function() {
  value.textContent = this.value;
});
