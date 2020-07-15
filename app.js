var formulario = document.getElementById("formulario");
formulario.addEventListener("submit", function (e) {
  e.preventDefault();

  var datos = new FormData(formulario);

  fetch("login.php", {
    method: "POST",
    body: datos,
  })
    .then((resp) => resp.json())
    .then((data) => {
      console.log(data.status);

      if (data.status == "ok") {
        location.href = "main.html";
      } else {
        alert("Usuario o contraseña incorrectos");
      }
    });
});
