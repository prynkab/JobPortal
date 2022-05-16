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
    if(isNaN(age)){
      text = "Please Enter valid Age";
      error_message.innerHTML = text;
      return false;
    }
    if(isNaN(dob)){
      text = "Please Enter valid Date Of Birth";
      error_message.innerHTML = text;
      return false;
    }
    if(isNaN(myfile)){
      text = "Please choose a file";
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