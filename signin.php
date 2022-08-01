<?php
require_once("connect.php");

if (isset($_POST['submit'])){


    if(empty($_POST['name']) || empty($_POST['email'])){
echo "Please Fill in the Field";
    }
    else{
        $Name = $_POST['name'];
        $Email = $_POST['email'];

        $query = " insert into username (Name, Email) values('$Name','$Email')";
        $result = mysqli_query($con,$query);

        if($result){
            header("location:view.php");
        }
        else{
            echo" Please Check Your Query";
        }
    }
}
else{
    header("location:view.php");
}


?>