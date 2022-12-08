

<div class="container">
  <h2>All users</h2>          
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>phone</th>
        <th>emailid</th>
        <th>gender</th>
        <th>dateofbirth</th>
        <th>country</th>
        <th>hobbies</th>
        <th>educationqulification</th> 
        <th>address</th>
        <th>action</th>
        <th>status</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach($user as $u)
        {
        ?>
      <tr>
        
      <td><?php echo $u->id;?></td>
      <td><?php echo $u->name;?></td>
      <td><?php echo $u->phone;?></td>
      <td><?php echo $u->emailid;?></td>
      <td><?php echo $u->gender;?></td>
      <td><?php echo $u->dateofbirth;?></td>
      <td><?php echo $u->country;?></td>
      <td><?php echo $u->hobbies;?></td>
      <td><?php echo $u->eductionqulification;?></td> 
      <td><?php echo $u->address;?></td>
      <td><a href="delete_user?did=<?php echo $u->id;?>">Delete</a></td>
       <td><a href="edit_user?eid=<?php echo $u->id;?>">Update</a></td>
       <td><a href="status?sid=<?php echo $u->id?> &&sta=<?php echo $u->status;?>"><?php echo $u->status;?></a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
  </table>
</div>
