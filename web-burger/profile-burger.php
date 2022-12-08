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
             <input type="text" placeholder="Name" name ="name" class ="form-control" value="<?php echo $alldata->name?>"> 
        </td>
    </tr>
    <tr>
            <td>
                <b><i  style="color:black">Phone Number :</i></b>
            </td>
            <td>
                <input type="Phone" placeholder="987*******" name ="phone" class ="form-control" value="<?php echo $alldata->phone?>">
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Email id :</i></b>
            </td>
            <td>
                <input type="Email id" placeholder="123@gmail.com" name ="emailid" class ="form-control" value="<?php echo $alldata->emailid?>">
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Password :</i></b>
            </td>
            <td>
                <input type="Password" placeholder="password" name ="password"  class ="form-control" value="<?php echo $alldata->password?>">
            
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Gender :</i></b>
            </td>
            <td>
                <input type="radio" name="gender" value="male" 
                <?php
                $g =$alldata->gender;
                if($g=="male")
                {
                    echo "checked= 'checked'";
                }
                ?>
                 >Male
                <input type="radio" name="gender" value="female"
                <?php
                $g =$alldata->gender;
                if($g=="female")
                {
                    echo "checked= 'checked'";
                }
                ?>
                >Female
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Date of Birth :</i></b>
            </td>
            <td>
                <input type="Date" name ="dateofbirth" class ="form-control"><?php echo $alldata->dateofbirth;?>
            </td>
        </tr>
        <tr>
        <td>Country :</td>
    		<td>
    			<select name="country"  class="form-control">
                    <?php
                    foreach($data as $c)
                    {
                        if($c->cid == $alldata->country)
                        {
                    ?>
    				<option value="<?php echo $c->cid;?>" selected><?php echo $c->cname;?></option>
                    <?php
                    }
                    else 
                    {
                    ?>
                    <option value="<?php echo $c->cid;?>"><?php echo $c->cname;?></option>
                <?php
                 }
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
                
                <input type="checkbox"  name ="hobbies[]" value="singing" class ="form-control"
                <?php
                $chk =$alldata->hobbies;
                $h =explode(",",$chk);
                if(in_array('singing',$h))
                {
                    echo "checked='checked'";
                }
                ?>
                >singing
                <input type="checkbox" name ="hobbies[]" value="dancing" class ="form-control"
                <?php
                $chk =$alldata->hobbies;
                $h =explode(",",$chk);
                if(in_array('dancing',$h))
                {
                    echo "checked='checked'";
                }
                ?>
                >dancing
                <input type="checkbox"  name ="hobbies[]" value="playing" class ="form-control"
                <?php
                $chk =$alldata->hobbies;
                $h =explode(",",$chk);
                if(in_array('playing',$h))
                {
                    echo "checked='checked'";
                }
                ?>
                >playing
            </td>
        </tr>
        <td>
            <b><i  style="color:black">Education Qulification :</i></b>
        </td>
          <td>
              <select name ="educationqulification">
                 <option>Select option</option>
                  <option value='10'
                  <?php
                  $p =@$alldata->educationqulification;
                  if($p =="educationqulification")
                  {
                    echo "selected ='selected'";
                  } 
                  ?>
                  >10 </option>
                  
                  <option value='12'
                  <?php
                  $p =@$alldata->educationqulification;
                  if($p =="educationqulification")
                  {
                    echo "selected ='selected'";
                  }
                  ?>
                  >12</option>

                  <option value='Graduation'
                  <?php
                  $p =@$alldata->educationqulification;
                  if($p =="educationqulification")
                  {
                    echo "selected ='selected'";
                  }
                  ?>
                  >Graduation</option>

                  <option value='post Graduation'
                  <?php
                  $p =@$alldata->educationqulification;
                  if($p =="educationqulification")
                  {
                    echo "selected ='selected'";
                  }
                  ?>

                  >post Graduation</option> 
              </select> 
          </td>
    </tr>
    <tr>
        <td>
            <b><i  style="color:black">Address :</i></b>
        </td>
    
         <td>
             <textarea rows="3" cols="100" placeholder="Address" name ="address"><?php echo $alldata->address;?> </textarea>
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