window.onload = login();
const logoutbtn = document.getElementById("logoutbtn");
logoutbtn.addEventListener("click", function () {
  logout();
});

function login() {
  let login = "true";
  fetch("requiere.php", {
    method: "POST",
    body: login,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.status == "ok") {
        $usrname = document.querySelector("#usrname");
        $usrimg = document.querySelector("#usrimg");
        this.$usrname.textContent = "Hola " + data.user;
        this.$usrimg.innerHTML =
          "<img alt='User' src = 'img/" + data.user + ".jpg'>";
        //console.log(data);
      } else {
        location.href = "index.html";
      }
    });
}

function logout() {
  let logout = "true";
  fetch("logout.php", {
    method: "POST",
    body: logout,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data == 1) {
        location.href = "index.html";
      } else {
        location.href = "index.html";
      }
    });
}
