<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script type="text/javascript">

   $(document).ready(function(){
       $('#btn-order').click(function()
       {
         alert("You have been redirect to Merchant page!");
         window.location='paytm-payment';
       })
   })
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" align="center">
           <tr>
            <th>pro_image</th>
            <th>pro_name</th>
            <th>pro_price</th>
            <th>pro_qty</th>
            <th>Total</th>
           </tr>
           <?php
           $sum =0;
           foreach($cart as $c)
           { 
           ?>
           <tr>
            <td><img src="../admin/upload/<?php echo $c->pro_img;?>" alt="" height="100" width="100"></td>
            <td><?php echo $c->pro_name;?></td>
            <td><?php echo $c->pro_price;?></td>
            <td><?php echo $c->qty;?></td>
            <td><?php echo $c->pro_price*$c->qty;?></td>
           </tr>
           <?php
            $sum+=$c->pro_price*$c->qty;
           }
           ?>
           <tr>
            <td colspan="5" align="right">Sub Total:<?php echo $sum;?>
            <button id="btn-order" class="btn btn-success">Place your order</button>
            </td>
           </tr>
    </table>

</body>
</html>