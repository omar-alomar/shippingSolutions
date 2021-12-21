function validate() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  if (username == "Sudeep" && password == "Driver123") {
    alert("Login successfully");
    window.location = "driver.html";
    return false;
  } else {
    alert("login failed");
  }
}

/* NEW JAVASCRIPT 

function init() {
  "use strict";

  // Confirm that document.getElementById() can be used:
  if (document && document.getElementById) {
    var loginForm = document.getElementById("lgform");
    loginForm.onsubmit = validateForm;
  }
}
window.onload = init;
 */
