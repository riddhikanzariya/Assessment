<?php
include_once 'header1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class ="container">
<div class ="row">
<div class="col-lg-12">

     
<form  action="" method="post" >
<table style="margin: auto;width:100%" border="4px" cellspacing="5px" cellpadding="5px" bordercolor="black">
    <tr>
         <h1 style="text-align: center;"> REGISTRETION FORM</h1>
    </tr>
    <tr>
        <td style="width:25%;">
            <b><i style="color:black">Name :</i></b>
        </td>
        <td>
             <input type="text" placeholder="Name" name ="name" class ="form-control"> 
        </td>
    </tr>
    <tr>
            <td>
                <b><i  style="color:black">Phone Number :</i></b>
            </td>
            <td>
                <input type="Phone" placeholder="987*******" name ="phone" class ="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Email id :</i></b>
            </td>
            <td>
                <input type="Email id" placeholder="123@gmail.com" name ="emailid" class ="form-control">
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Password :</i></b>
            </td>
            <td>
                <input type="Password" placeholder="password" name ="password"  class ="form-control">
            
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Gender :</i></b>
            </td>
            <td>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Date of Birth :</i></b>
            </td>
            <td>
                <input type="Date" name ="dateofbirth" class ="form-control">
            </td>
        </tr>
        <tr>
        <td>Country :</td>
    		<td>
    			<select name="country"  class="form-control">
                    <?php
                    foreach($data as $c)
                    {
                    ?>
    				<option value="<?php echo $c->cid;?>"><?php echo $c->cname;?></option>
                    <?php
                    }
                    ?>
    			</select>
    		</td>
    	</tr>
        <tr>
            <td>
                <b><i  style="color:black">Hobbies :</i></b>
            </td>
            <td>
                
                <input type="checkbox"  name ="hobbies[]" value="singing" class ="form-control">singing
                <input type="checkbox" name ="hobbies[]" value="dancing" class ="form-control">dancing
                <input type="checkbox"  name ="hobbies[]" value="playing" class ="form-control">playing
            </td>
        </tr>
        <td>
            <b><i  style="color:black">Education Qulification :</i></b>
        </td>
          <td>
              <select name ="educationqulification">
                  <option>Select option</option>
                  <option>10</option>
                  <option>12</option>
                  <option>Graduation</option>
                  <option>post Graduation</option>
              </select>
          </td>
    </tr>
    <tr>
        <td>
            <b><i  style="color:black">Address :</i></b>
        </td>
    
         <td>
             <textarea rows="3" cols="100" placeholder="Address" name ="address" ></textarea>
         </td>
     </tr>
     <tr>
        <td></td>
         <td >
             <input type="Submit" value="Submit" class ="form-control" style="width:100px; background:green;color:white" name="submit">
             <input type="reset" value="reset" class ="form-control" style="width:100px;background:yellow;color:grey">
         </td>
     </tr>
</table>

</form>
</div>
</div>
</div>


</body>
</html>
<?php
include_once 'footer1.php';
?>