<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
//$flag=0;
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$mail=$_POST['mail'];
$phone=$_POST['phone'];
$pwd=$_POST['pwd'];
$rpwd=$_POST['rpwd'];
$con=@mysqli_connect('localhost', 'root', '','newdata');
$query = "insert into newregister values('$firstName','$lastName','$mail','$phone','$pwd','$rpwd')";
 
 if($pwd===$rpwd) 
 { 
   $result = mysqli_query($con,$query);
//  if($result)
//  {    
////       $flag=1;
//      
//      echo "Data inserted successfully";
//
//  }   
      
      
  }  
  else
  {
       echo("<SCRIPT LANGUAGE='JavaScript'> 
                            window.alert('WRONG  PASSWORD TRY AGAIN!') 
                            </SCRIPT>");
  }   
      
      ?>



<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration</title>
        <style>
/*            table,tr,th,td{
                border: 1px solid black;
                border-collapse: collapse;
            }
            td{
                text-align: center;
            }*/
  h1{
    
  }
        </style>
    </head>
    <body bgcolor="black" text="white" align="center">
        <?php
        if($result)
  {   
            ?>
        <table align="center" text="pink"><tr><td> <h1> You have registered successfully</h1></td></tr></table>

      
      <?php

  }   
        ?>

    <?php
            if($result==1){            
        ?> 
        <h2 style="color:orange">your user id is</h2> <?php echo $mail; ?> 
        <h2 style="color:orange"> your password is</h2><?php echo $pwd; ?> 
        
     <?php
            }
      ?> 
        
        
        
        
        
        
         </body>
</html>
