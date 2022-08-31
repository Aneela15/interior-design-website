<?php

    include 'conn.php';

        $username=$_POST['uname'];
        $password=$_POST['pw'];


        $sql=" select * from `reg_usr` where `un`='$username' and `pw`= '$password' ";

        $query = mysqli_query($con,$sql);

        $count = mysqli_num_rows($query);


       if($count==1){

                ?>
                <script>location.replace("hm.html");</script>
                <?php
            }
            else{

                ?>
                <script>alert("Invalid Password | username");
                location.replace("login.php");
                </script>
                <?php
            }
   ?>
