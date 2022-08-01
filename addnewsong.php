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
                        <h3 class="bg-success text-white text-center py-2">Add a New Song</h3>
                    </div>
                    <div class="card-body">
<form action = "addartist.php">
<button class="btn btn-primary">Add New Artist</a></button>
</form><br>

                    <form  action ="addsongname.php" method = "POST">
<input type = "text" name ="songname" class="form-control" placeholder="Song Name"><br>
<label>Date Released</label>
<input type = "date" name ="releasedate" class="form-control" placeholder="Date Released"><br>
<label>Artwork</label><br>
<input type = "file" name ="artwork" class="form-control" placeholder="Artwork"> <br>
<input type = "text" name ="artist" class="form-control" placeholder="Artist">
 <br>

<button class="btn btn-primary" name = "submit">Save Song</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>