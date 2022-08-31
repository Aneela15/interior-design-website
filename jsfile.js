function validate(){
  var match=document.getElementById("match");
  var pas=document.getElementById("pw").value;
  var cnf=document.getElementById("cp").value;
  if(pas!=(cnf)){

    match.style.display = "block";
    match.textContent = "Passwords didn't match";
    match.style.color = "red";
    return false;
  }
  else{
    match.textContent = "";
    match.style.display = "none";
    return true;
  }
}

function rem(){
  var match=document.getElementById("match");
  match.style.display = "none";
}


function errorMessage() {

  document.getElementById("message").style.display = "block";
  var len = document.getElementById("length");
  var capital = document.getElementById("capital");
  var small = document.getElementById("small");
  var num = document.getElementById("number");


  var word=document.getElementById("pw").value;
  var lowerCaseLetters = /[a-z]/g;
  var upperCaseLetters =/[A-Z]/g;
  var numbers = /[0-9]/g;


      if (word.length<8)
      {
          // Changing content and color of content
          len.style.display = "block";
          len.textContent = "Password length should be atleast 8";
          len.style.color = "red";


      }
      else{
          len.textContent = "";
          len.style.display = "none";

      }
      if(word.match(lowerCaseLetters)){
          small.style.display = "none";
          small.textContent="";


      }
      else{
          small.style.display = "block";
          small.textContent = "Password should contain atleaat one small letter";
          small.style.color = "red";
      }

      if(word.match(upperCaseLetters)){
          capital.style.display = "none";
          capital.textContent="";

      }
      else{
          capital.style.display = "block";
          capital.textContent = "Password should contain atleaat one capital letter";
          capital.style.color = "red";
      }

      if(word.match(numbers)){
          num.style.display = "none";
          num.textContent="";

      }
      else{
          num.style.display = "block";
          num.textContent = "Password should contain atleaat number";
          num.style.color = "red";
      }


  }


  // When the user clicks outside of the password field, hide the message box
  function blurrr(){
      document.getElementById("message").style.display = "none";
  }


function showPas() {
  //alert("hello world");
  var x = document.getElementById("pw");
  if (x.type === "password") {
  x.type = "text";
  document.getElementById("icn").classList.remove("fa-eye");
  document.getElementById("icn").classList.add("fa-eye-slash");
  }
  else {
  x.type = "password";
  document.getElementById("icn").classList.remove("fa-eye-slash");
  document.getElementById("icn").classList.add("fa-eye");

  }
}

//last name and first Name
function nameVal1(){

  document.getElementById("msg1").style.display = "block";

  var x=document.getElementById("fn").value;

  var capital1 = document.getElementById("capitals1");
  var small1 = document.getElementById("smalls1");

  var lowerCaseLetters = /[a-z]/g;
  var upperCaseLetters =/[A-Z]/g;

  if(x.match(lowerCaseLetters) || x.match(upperCaseLetters)){
      small1.style.display = "none";
      small1.textContent="";
  }
  else{
      small1.style.display = "block";
      small1.textContent = "FirstName should contain letters only";
      small1.style.color = "red";
  }


}


function nameVal2(){

document.getElementById("msg2").style.display = "block";
  var y=document.getElementById("ln").value;

  var capital2 = document.getElementById("capitals2");
  var small2 = document.getElementById("smalls2");

  var lowerCaseLetters = /[a-z]/g;
  var upperCaseLetters =/[A-Z]/g;

  if(y.match(lowerCaseLetters) || y.match(upperCaseLetters)){
      small2.style.display = "none";
      small2.textContent="";
  }
  else{
      small2.style.display = "block";
      small2.textContent = "LastName should contain letters only";
      small2.style.color = "red";
  }

}
