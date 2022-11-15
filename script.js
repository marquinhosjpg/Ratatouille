// const togglePassword = document.querySelector('#togglePassword');
//   const password = document.querySelector('#id_password');

//   togglePassword.addEventListener('click', function (e) {
//     // toggle the type attribute
//     const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
//     password.setAttribute('type', type);
//     // toggle the eye slash icon
//     this.classList.toggle('fa-eye-slash');
// });

const showPassword = document.querySelector("#show");
const passwordField = document.querySelector("#password");

showPassword.addEventListener("click", function(){
  this.classList.toggle('fa-eye-slash');
  const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
  passwordField.setAttribute("type", type);
})

// ----------------------------------

// const mostrarSenha = document.querySelector("#mostrar");
// const senhaEscudo = document.querySelector("#senha");

// mostrarSenha.addEventListener("click", function(){
//   this.classList.toggle('fa-eye-slash');
//   const type = senhaEscudo.getAttribute("type") === "senha" ? "text" : "senha";
//   senhaEscudo.setAttribute("type", type);
// })

const mostrar = document.querySelector("#mostrar");
const senha = document.querySelector("#senha");

mostrar.addEventListener("click", function(){
  this.classList.toggle('fa-eye-slash');
  const type = senha.getAttribute("type") === "senha" ? "text" : "senha";
  senha.setAttribute("type", type);
})