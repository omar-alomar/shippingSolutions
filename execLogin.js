function validate() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  
  if (username == "Sudeep" && password == "Driver123") {
    alert("Login successfully");
    window.location = "exec.html";
    return false;
  } else {
    alert("login failed");
  }
}
