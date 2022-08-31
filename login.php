<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<script src="https://kit.fontawesome.com/2af445a7b6.js" crossorigin="anonymous"></script>
<script src="jsfile.js"></script>
@import href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css";
    <style>

      body{
background-image: linear-gradient(-90deg,rgba(0,0,0,1),rgba(0,0,0,0.4)),url(log.jpg);
background-position: center;
background-repeat: no-repeat;
background-size: cover;
background-attachment:fixed;
      }

   .loginbox{
     width:280px;
     position:absolute;
     top:50%;
     left:65%;
     transform:translate(-50%,-50%);
     color:white;
   }
    .loginbox h1{

      font-size: 30px;
      border-bottom: 3px solid #4caf50;
      margin-bottom:50px;
      padding:13px 0;
      font-family:sans-serif;
    }
    .textbox{
      width:100%;
      font-size: 20px;
      padding: 8px 0;
      margin:8px 0;
      border-bottom:1px solid #4caf50;

    }
    .textbox i{
      width:26px;
      float:left;
      text-align:center;
    }
    .textbox input{
      border: none;
      outline:none;
      background: none;
      color:white;
      font-size: 18px;
      width: 70%;
      margin:0 10px;
    }
    button{
      width:100%;
      background:none;
      border:2px solid #4caf50;
      color :white;
      padding:5px;
      margin:12px 0;
      cursor:pointer;
      font-size: 18px;
    }
    </style>



  </head>
  <body>
    <div class="loginbox">
     <h1>LOGIN</h1>
      <form method="post" action="verifylog.php" name="loginf" target="_self"  onsubmit="return validateForm();">

     <div class="textbox">
       <i class="fa-solid fa-user"></i>
       <input type="text" placeholder="username" id="un" name="uname" required/>
     </div>
     <div class="textbox">
        <i class="fa-solid fa-lock "></i>
       <input type="password" placeholder="password" id="pw" name="pw" required/>
       <i class="fa fa-eye" id="icn" aria-hidden="true" style="float:right;" onclick="showPas()"></i>
     </div>
     <br />
    <button type="submit">Sign in</button>
     <span>Donot have an account? <a href="reg.php">Register Here</a></span>

     </form>
       </div>

       <script type="text/javascript">
       function validateForm() {
         var x = document.getElementById("un").value;
         var y = document.getElementById("pw").value;

         if (x == "") {
           alert("Name must be filled out");
           return false;
         }
         else if (y.length<8){
           alert("Password should have atleast 8 characters!!");
           return false;
         }

       }

       </script>

    </body>
</html>
