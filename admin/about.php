<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <table border="1" align="center">
          <tr>
            <td>gallery:</td>
            <td><select name="gll">
                <?php
                foreach($all_gll as $gall)
                {
                ?>
                <option value="<?php echo $gall->gll_id; ?>"><?php echo $gall->gll_name;?></option>
                <?php
                }
                ?>
            </select></td>
          </tr>
          <tr>
            <td>image:</td>
            <td><input type="file" name="file"></td>
          </tr>
          <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>