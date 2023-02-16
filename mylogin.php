<?php
$flag=0;
$t=0;
$emailid=$_POST['emailid'];
$pswd=$_POST['pswd'];
@mysqli_connect('localhost', 'root', '','inkfinites');
$con = mysqli_connect('localhost', 'root', '',"inkfinites");
$query="select email,cpwd from register";
 $result = mysqli_query($con,$query);
 $count = mysqli_num_rows($result);
 //echo $count;
 while($row = mysqli_fetch_assoc($result))
  { //print_r($row); 
      if($row['email']===$emailid&&$row['cpwd']===$pswd)
      { $flag=1;
          if($row['email']=='admin@yahoo.com'&&$row['cpwd']==admin)   
          {
           $t=2;
         // echo" user exist <br>";
          }
          
          else
          
          {
          //echo"<a href=Book.php>Book ur seat</a> <br>";
          
          //print_r($row); 
           $t=3;   
          //echo"<a href=booking.html>Book ur seat</a> <br>";
          }
      }
  }
  
if($flag==0)     
     {
    echo("<SCRIPT LANGUAGE='JavaScript'> 
                            window.alert('WRONG USERID OR PASSWORD TRY AGAIN!'); history.go(-1);return ; 
                            </SCRIPT>");
     //echo &#34; <script>alert&#40;&#39;alert text&#39;&#41;</script>&#34;
     //echo'wrong userid or password';  
     } 
 
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            #place{ padding:10px 0 10px 40px; 
                    margin:30px 0 20px 60px; 
                    float:right; width:300px; 
                    height:150px; border:#FF0000 solid 1px; 
                    background-color:plum; color:#FFFFFF; }
            
            #place2{ padding:10px 0 10px 40px; 
                    margin:30px 0 20px 60px; 
                    float:left; width:300px; 
                    height:150px; 
                     color:#FFFFFF; }
             body{
	background-color: pink;
         </style>
    </head>
    <body>
     <div id="place2"><img src="Img\infy logo.jpeg"  height="500px"  width="1000px"></div>   
     <div id="place">  <?php if($t===2){?>
         <h3>ITS ADMINISTRATOR PAGE</h3>
        
        <a href="editview.php">Edit/detail</a> 
      <?php }else if($t===3){ ?>
        <H3>ITS USER PAGE</H3>
         <a href="inkfinites.html">Go home </a> <br>
           </div>
      <?php } ?> 
    </body>
</html>