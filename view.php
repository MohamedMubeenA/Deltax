<?php 

require_once("connect.php");

$query = " select * from username";
$result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Added Songs</title>
    <link rel="icon"  href="C:\Users\Mohamed Mubeen\OneDrive\Pictures\deltax.png"> 
<link rel = "stylesheet" href = "bootstrap.css">
</head>
<body class ="bg-dark">
    <div class ="container">
        <div class ="row">
         <div class = "col m-auto">
                <div class="card mt-5">
                    <table class ="table table-bordered">
                      <tr>
                        <td>Name</td>
                        <td>Email</td>
                      </tr>
<?php
   while($row = mysqli_fetch_assoc($result))
   {
        $Name = $row['Name'];
        $Email = $row['Email'];
?>
                    <tr>
                        <td><?php echo $Name?></td>
                        <td><?php echo $Email?></td>
                    </tr>
                    <?php
    }
                    ?>

                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
