<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DeltaX</title>
    <link rel="icon"  href="Pictures\deltax.png"> 
<link rel = "stylesheet" href = "bootstrap.css">
</head>
<body class ="bg-dark">
    <div class ="container">
        <div class ="row">
         <div class = "col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-2">Add Artist</h3>
                    </div>
                    <div class="card-body">
                    <form  action ="songadd.php" method = "POST">
<input type = "text" name ="fullartistname" class="form-control" placeholder="Artist Name"><br>
<label>Date of Birth </label>
<input type = "date" name ="dateofbirth" class="form-control" placeholder="Date of Birth"><br>
<input type = "text" name ="bio" class="form-control" placeholder="Bio">
 <br>
 
<button class="btn btn-primary" a href = "frontpage.html">Cancel</a></button>

<button class="btn btn-primary" name = "submit">Done</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>