<!DOCTYPE html>
<html>
<head>
  <style>
    body{
      background-image:url(bg.jpg);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
}
#shpnw{
    color: #fff;
    background-color: #c9302c;
    border-color: #ac2925;
    box-shadow: inset 0 3px 5px rgb(0 0 0 / 13%);
    padding: 10px 16px;
    font-size: 18px;
    border-radius: 6px;
    margin-left:250px;
}
#liv{
  width:40%;
  background-color: rgba(0,0,0,0.7);
  color:white;
  font-family:Georgia(serif);
  height:30%;
  margin-left: 300px;
  margin-top: 250px;
  padding-left:150px;
  padding-right:150px;
  padding-top:100px;
  padding-bottom:100px;
  font-size: 30px;
  font-weight: bolder;
}
#navbar {
background-color:rgba(0,0,0,0.7);
position: fixed;
top:0;
left:0;
width: 100%;
display: block;
transition: top 0.3s;
padding-right: :100px;
}

#navbar a {
float: right;
display: block;
color: #f2f2f2;
text-align: center;
padding-right:70px;
padding-top:15px;
padding-bottom:15px;
padding-left:50px;
text-decoration: none;
font-size: 17px;
font-style: italic;
font-weight: bolder;
font-family: 'Times New Roman', Times, serif;
}

#navbar a:hover {
color: orange;
}


  </style>
</head>
<body >
  <div id="navbar">
     <a href="login.php">LOGIN</a>
     <a href="about.html">ABOUT US</a>
  </div>
    <div id="liv">
        <marquee style="margin-bottom:30px;">We help you for a Modern Interior!!</marquee>
        <a id="shpnw" href="login.php">Shop Now</a>
    </div>
</body>

</html>
