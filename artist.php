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
                    <form  action =".php" method = "POST">
<input type = "text" name ="name" class="form-control" placeholder="Song Name"><br>
<input type = "text" name ="releasedate" class="form-control" placeholder="Date Released"><br>
<input type = "text" name ="releasedate" class="form-control" placeholder="Artist">
 <br>
<label>Artwork</label><br>
<input type = "file" name ="img" class="form-control" placeholder="Artwork"> <br>
<button class="btn btn-primary" name = "submit">Cancel</button>
<button class="btn btn-primary" name = "submit">Save</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>