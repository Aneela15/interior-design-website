
<?php

     $conn= mysqli_connect('localhost','root','','id') or die("Connection failed:".mysqli_connect_error());

     if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['uname']) && isset($_POST['pw']) && isset($_POST['cpw']) ){
         $fname=$_POST['fname'];
         $lname=$_POST['lname'];
         $uname=$_POST['uname'];
         $pw=$_POST['pw'];
         $cpw=$_POST['cpw'];
         $add=$_POST['add'];
         $query="SELECT * from `reg_usr` where `un`='$uname'";

         $query2=mysqli_query($conn,$query);

         $count=mysqli_num_rows($query2);

         if($count===0){

         $sql="INSERT INTO
                  `reg_usr` (`fname`,`lname`,`un`,`pw`,`cpw`,`address`)
                        VALUES ('$fname','$lname','$uname','$pw','$cpw', '$add')";
         try{
            mysqli_query($conn,$sql);

            ?>

   <script>
   alert( "Registration Successful");
   location.replace ("login.php");</script>

            <?php
         }
         catch(exception $e){
             echo $e->getmessage();
         }

     }

     else{  ?>
      <script> alert("Registration failed!! user already exists");  </script>
      <?php
     }
   }

 ?>
