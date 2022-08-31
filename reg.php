<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
    <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/2af445a7b6.js" crossorigin="anonymous"></script>
   <script src="jsfile.js"></script>
   @import href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css";
  <style>
   
    body{

     background-image: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url(log.jpg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
    }
   .formbox{
     width:280px;
     position:absolute;
     top:50%;
     left:45%;
     transform:translate(-50%,-50%);
     color:white;
   }
    .formbox h1{
      left:50%;
      font-size: 30px;
      border-bottom: 3px solid #4caf50;
      margin-bottom:50px;
      padding:13px 0;
      font-family:sans-serif;
    }
    .textbox{
      width:150%;
      font-size: 20px;
      padding: 8px 0;
      margin:8px 0;
      border-bottom:2px solid #4caf50;

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
      width: 80%;
      margin:0 10px;
    }
    button{
      width:100%;
      background:none;
      border:3px solid #4caf50;
      color :white;
      padding:5px;
      margin:12px 0;
      cursor:pointer;
      font-size: 18px;
    }
  </style>
</head>


<body>


  <div class="formbox">

    <h1>REGISTRATION</h1>

    <form method="post" action="storing.php" name="register" target="_self" onsubmit="return validate()">

      <div class="textbox">
        <i class="fa fa-user-o" aria-hidden="true"></i>
        <input type="text" placeholder="firstname" id="fn" name="fname" oninput="nameVal1()" required/>
      </div><br />

      <div id="msg1" class="mes">
                           <span id="capitals1"></span>
                           <span id="smalls1"></span>
        </div>


      <div class="textbox">
      <i class="fa fa-user-o" aria-hidden="true"></i>
        <input type="text" placeholder="lastname" id="ln" name="lname" oninput="nameVal2()" required/>
      </div><br />

      <div id="msg2" class="mes">
                           <span id="capitals2"></span>
                           <span id="smalls2"></span>
        </div>

   <div class="textbox">
     <i class="fa-solid fa-user"></i>
     <input type="text" placeholder="username" id="un" name="uname" required/>
   </div><br />

   <div class="textbox">
        <i class="fa fa-home" aria-hidden="true"></i>
     <input type="text" placeholder="address" id="add" name="add" required />

   </div><br />

   <div class="textbox">
      <i class="fa-solid fa-lock "></i>
     <input type="password" placeholder="password" id="pw" name="pw" oninput="errorMessage()" onblur="blurrr" required/>
     <i class="fa fa-eye" id="icn" aria-hidden="true" style="float:right;" onclick="showPas()"></i>
   </div><br />
   <div id="message" class="mes">
                        <span id="length"></span>
                        <span id="capital"></span>
                        <span id="small"></span>
                        <span id="number"></span>

                    </div>

   <div class="textbox">
     <i class="fa-solid fa-lock"></i>
     <input type="password" placeholder="confirm-password" id="cp" onfocus="rem()" name="cpw" required/>

   </div>
   <span id="match"></span>
   <br />

  <button type="submit">Sign in</button>

   </form>

  </div>
</body>
</html>
