<?php
if(isset($_COOKIE['email']))
{
    $email =$_COOKIE['email'];
}
else 
{
    $email="";
}
if(isset($_COOKIE['password']))
{
    $password =$_COOKIE['password'];
}
else 
{
    $password="";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class ="container">
<div class ="row">
<div class="col-lg-12">

 <h1 align="center">LOGIN</h1>    
<form  action="" method="post" align="center">
<table style="margin: auto;width:100%" border="4px" cellspacing="5px" cellpadding="5px" bordercolor="black">
    
        <tr>
            <td>
                <b><i  style="color:black">Email id :</i></b>
            </td>
            <td>
                <input type="Email id" placeholder="123@gmail.com" name ="emailid" class ="form-control" value="<?php echo @$_COOKIE['email'];?>">
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Password :</i></b>
            </td>
            <td>
                <input type="Password" placeholder="password" name ="password"  class ="form-control" value="<?php echo @$_COOKIE['password'];?>">
             
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="remember" value="remember">Remember</td>
        </tr>
        <tr>
            <td></td>
            <td>
            <input type="submit" value="login" class ="form-control" style="width:100px; background:green;color:white" name="login">
            </td>
        </tr>
         
 </table>
 <br>
            <a href="forgot" style="color:blue;">forgot password ?</a>
            <a href="change" style="color:blue;">Change Password ?</a>
  <br>
      Don't have a account ? <a href="index" style="color:blue;"> SIGN UP </a>           
 </form>  
 </div>
</div>
</div>    
</body>
</html>