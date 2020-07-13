var formulario = document.getElementById("formulario");
formulario.addEventListener("submit", function (e) {
  e.preventDefault();
  //debugger;
  //console.log("click");

  var datos = new FormData(formulario);
  //console.log(datos.get("usuario"));
  //console.log(datos.get("password"));
  fetch("login.php", {
    method: "POST",
    body: datos,
  })
    .then((resp) => resp.json())
    .then((data) => {
      console.log(data.status);

      if (data.status == "ok") {
        //var usuario = data.user;
        // debugger;
        location.href = "main.html";
      } else {
        //   // alert("Hello\nHow are you?✅");
        //   //HTMLSourceElement.src;
        console.log(data.status);
        //debugger;
        alert("Usuario o contraseña incorrectos");
      }
    });
});

//console.log(data);

// .then((res) => res.json());
// .then((data) => {
//   console.log(data);
// debugger;
//  });
