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
             <input type="text" placeholder="Name" name ="name" class ="form-control" value="<?php echo $user_fetch->name;?>"> 
        </td>
    </tr>
    <tr>
            <td>
                <b><i  style="color:black">Phone Number :</i></b>
            </td>
            <td>
                <input type="Phone" placeholder="987*******" name ="phone" class ="form-control" value="<?php echo $user_fetch->phone;?>">
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Email id :</i></b>
            </td>
            <td>
                <input type="Email id" placeholder="123@gmail.com" name ="emailid" class ="form-control" value="<?php echo $user_fetch->emailid;?>">
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Password :</i></b>
            </td>
            <td>
                <input type="Password" placeholder="password" name ="password"  class ="form-control" value="<?php echo $user_fetch->password;?>">
            
            </td>
        </tr>
        <tr>
            <td>
                <b><i  style="color:black">Gender :</i></b>
            </td>
            <td>
                <input type="radio" name="gender" value="male" 
                <?php
                $g =$user_fetch->gender;
                if($g=="male")
                {
                    echo "checked= 'checked'";
                }
                ?>
                 >Male
                <input type="radio" name="gender" value="female"
                <?php
                $g =$user_fetch->gender;
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
                <input type="Date" name ="dateofbirth" class ="form-control"><?php echo $user_fetch->dateofbirth;?>
            </td>
        </tr>
        <tr>
        <td>Country :</td>
    		<td>
    			<select name="country"  class="form-control">
                    <?php
                    foreach($data as $c)
                    {
                        if($c->cid == $user_fetch->country)
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
                <?php $h =$user_fetch->hobbies;
                $hh =explode(",",$h);
                ?>
                <?php
                if(in_array('singing',$hh))
                {
                    echo "checked='checked'";
                }
                ?>
                >singing
                <input type="checkbox" name ="hobbies[]" value="dancing" class ="form-control"
                <?php
                if(in_array('dancing',$hh))
                {
                    echo "checked='checked'";
                }
                ?>
                >dancing
                <input type="checkbox"  name ="hobbies[]" value="playing" class ="form-control"
                <?php
                if(in_array('playing',$hh))
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
        
                 <?php
                 $p =$user_fetch->educationqulification;
                 
                 {
                if($p =="10")
                {
                  ?>
                       <option value='10' selected>10</option>
                  <?php
                } 
                else{
                  ?>
                  <option value='10'>10 </option>
                  <?php
                }
                ?>
                  
                    <?php
                   $p =$user_fetch->educationqulification;
                  if($p =="12")
                  {
                    ?>
                         <option value='12' selected>12</option>
                    <?php
                  } 
                  else{
                    ?>
                    <option value='12'>12 </option>
                    <?php
                  }
                  ?>
                   <?php
                   $p =$user_fetch->educationqulification;
                  if($p =="Graduation")
                  {
                    ?>
                         <option value='Graduation' selected>Graduation </option>
                    <?php
                  } 
                  else{
                    ?>
                    <option value='Graduation'>Graduation</option>
                    <?php
                  }
                  ?> <?php
                  $p =$user_fetch->educationqulification;
                  if($p =="Post Graduation")
                  {
                    ?>
                         <option value='Post Graduation' selected> Post Graduation</option>
                    <?php
                  } 
                  else{
                    ?>
                    <option value='Post Graduation'> Post Graduation </option>
                    <?php
                  } 
                 }
                  ?>
              </select>
          </td>
    </tr>
    <tr>
        <td>
            <b><i  style="color:black">Address :</i></b>
        </td>
    
         <td>
             <textarea rows="3" cols="100" placeholder="Address" name ="address"><?php echo $user_fetch->address;?> </textarea>
         </td>
     </tr>
     <tr>
        <td></td>
         <td >
             <input type="Submit" value="Update" class ="form-control" style="width:100px; background:green;color:white" name="Update">
             
         </td>
     </tr>
</table>

</form>
</div>
</div>
</div>


</body>
</html>