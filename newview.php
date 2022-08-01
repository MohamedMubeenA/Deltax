<?php 

require_once("connectartist.php");

$query = " select * from artistname ";
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
                        <td>Artist Name</td>
                        <td>Date Of Birth</td>
                        <td>Bio</td>
                      </tr>
<?php
   while($row = mysqli_fetch_assoc($result))
   {
        $ArtistName = $row['ArtistName'];
        $DateOfBirth = $row['DateOfBirth'];
        $Bio = $row['Bio'];
        
?>
                    <tr>
                        <td><?php echo $ArtistName?></td>
                        <td><?php echo $DateOfBirth?></td>
                        <td><?php echo $Bio?></td>
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
