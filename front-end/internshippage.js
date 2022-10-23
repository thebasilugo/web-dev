// function to show password
function show_password() {
  var x = document.getElementById("myPwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}