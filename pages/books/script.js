
// function clickk() {
//   let inputRange = document.getElementById("numero");
//   let inputValue = document.getElementById("numeroValue");
//   inputValue.innerHTML = inputRange.value;

//   inputRange.addEventListener('input', () => {
//     inputValue.textContent = this.value;
//   })

//   // inputValue.oninput = function() {
//   //   inputValue.innerHTML = this.value;
//   // }
// };

// let inputRange = document.getElementById("numero");
// let inputValue = document.getElementById("numeroValue");
// //inputValue.innerHTML = inputRange.value;

// inputRange.addEventListener('input', function () {
//   inputValue.textContent = this.value;
// })

// alert('hmm');

// let ranged = document.querySelector('#ranged');
// let valui = document.querySelector('#valui');

// ranged.addEventListener('input', function() {
//   valui.textContent = this.value;
// })





var range = document.getElementById('numero'),
    value = document.getElementById('numeroValue');

range.addEventListener('input', function() {
  value.textContent = this.value;
});