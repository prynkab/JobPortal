<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="stylesheet" href="css/styles.css">
	<script>
        function validate(){
    var name = document.getElementById("name").value;
    var myfile = document.getElementById("myfile").value;
    var email = document.getElementById("email").value;
    var dob = document.getElementById("dob").value;
    var age = document.getElementById("age").value;
    var error_message = document.getElementById("error_message");
    
    error_message.style.padding = "10px";
    var text;
    if(name.length < 5){
      text = "Please Enter valid Name";
      error_message.innerHTML = text;
      return false;
    }
    if(age.length==0){
      text = "Please Enter valid Age";
      error_message.innerHTML = text;
      return false;
    }
    if(dob.length == 0){
      text = "Please Enter valid Date Of Birth";
      error_message.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    alert("Registered Successfully!");
    return true;
  }
    </script>
</head>
<body>
<button id="Home"><a href="index.html">Home</a></button>
<div class="wrapper">
  <h2>Register</h2>
  <div id="error_message"></div>
  <form id="myform" action="php/register_user.php" method="POST" onsubmit="return validate();">
    <div class="input_field">
        <input type="text" placeholder="Name" id="name" name="name">
    </div>
    <div class="input_field">
        <label for="dob" style="font-size: 15px">Date Of Birth </label>
        <input style="margin-left: 20px;" type="date" id="dob" name="dob" value="">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Age" id="age" name="age">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email" name="email">
    </div>
    <div class="input_field">
        <input type="file" placeholder="Resume" id="myfile" name="myfile">
    </div>
    <div class="btn">
        <input name="submit" type="submit">
    </div>
    <p class="login-register-text">Already have an account? <a href="login.php">Login Now</a></p>
  </form>
</div>

</body>
</html>