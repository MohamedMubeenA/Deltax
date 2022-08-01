<?php 

require_once("connectartist.php");

if (isset($_POST['submit'])){


    if(empty($_POST['fullartistname']) || empty($_POST['dateofbirth']) || empty($_POST['bio'])){
echo "Please Fill in the Field";
    }
    else{
        $ArtistName = $_POST['fullartistname'];
        $DateOfBirth = $_POST['dateofbirth'];
        $Bio = $_POST['bio'];


        $query = " insert into artistname (ArtistName, DateOfBirth, Bio) values('$ArtistName','$DateOfBirth','$Bio')";
        $result = mysqli_query($con,$query);

        if($result){
            header("location:newview.php");
        }
        else{
            echo" Please Check Your Query";
        }
    }
}
else{
    header("location:newview.php");
}


?>