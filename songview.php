<?php 

require_once("connector.php");

$query = " select * from songdetail ";
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
                        <td>Song Name</td>
                        <td>Release Date</td>
                        <td>Artwork</td>
                        <td>Artist</td>
                      </tr>
<?php
   while($row = mysqli_fetch_assoc($result))
   {
        $SongName = $row['SongName'];
        $ReleaseDate = $row['ReleaseDate'];
        $Artwork = $row['Artwork'];
        $Artist = $row['Artist'];
        

        
?>
                    <tr>
                        <td><?php echo $SongName?></td>
                        <td><?php echo $ReleaseDate?></td>
                        <td><?php echo $Artwork?></td>
                        <td><?php echo $Artist?></td>
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

