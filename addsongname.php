<?php 

require_once("connector.php");

if (isset($_POST['submit'])){


    if(empty($_POST['songname']) || empty($_POST['releasedate']) || empty($_POST['artwork']) || empty($_POST['artist'])){
echo "Please Fill in the Field";
    }
    else{
        $SongName = $_POST['songname'];
        $ReleaseDate = $_POST['releasedate'];
        $Artwork = $_POST['artwork'];
        $Artist = $_POST['artist'];


        $query = " insert into songdetail (SongName, ReleaseDate, Artwork, Artist) values ('$SongName','$ReleaseDate','$Artwork','$Artist')";
        $result = mysqli_query($con,$query);

        if($result){
            header("location:songview.php");
        }
        else{
            echo" Please Check Your Query";
        }
    }
}
else{
    header("location:songview.php");
}


?>