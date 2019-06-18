$(document).ready(function () {
  $('#dob').datepicker({
    changeYear : true
  });
});


function validate() {
  document.getElementById("usernameError").style.display = "none";
  document.getElementById("usernameError2").style.display = "none";
  document.getElementById("passwordError").style.display = "none";
  document.getElementById("passwordError2").style.display = "none";
  document.getElementById("passwordError3").style.display = "none";
  document.getElementById("collegeError").style.display = "none";

  var username = document.getElementById("username").value.trim();
  var password = document.getElementById("password").value.trim();
  var college = document.getElementById("college").value;

  var success = true;

  if (username === "") {
    success = false;
    document.getElementById("usernameError").style.display = "inline";
  } else {
    var u = /^[a-z0-9]+$/;
    if (!u.test(username)) {
      success = false;
      document.getElementById("usernameError2").style.display = "inline";
    }
  }

  if (password === "") {
    success = false;
    document.getElementById("passwordError").style.display = "inline";
    }
  // else if (password.length < 5 || password.length > 20) {
  //   success = false;
  //   document.getElementById("passwordError2").style.display = "inline";
  //}
   else {
    var v = /^[0-9]{5}[a-z]{0,14}(\$|\*)$/;
    if (!v.test(password)) {
      success = false;
      document.getElementById("passwordError3").style.display = "inline";
    }
  }

  if (college === "-1") {
    success = false;
    document.getElementById("collegeError").style.display = "inline";
  }

    return success;
}

function changeColor() {
  document.getElementById('btn').setAttribute('class','hover-style');
}

function backToOriginal() {
  document.getElementById('btn').setAttribute('class','non-hover-style');
}
