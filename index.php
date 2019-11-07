<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Face Detect</title>
    <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'> -->
    <link rel="stylesheet" href="./style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body style="background-color: #0a0a0a; color: #fff;">
    <div class="container-fluid">
        <div class="row vertical-center">
            <form action="/facedetect.php" method="POST" enctype="multipart/form-data"
                class="col-xs-8 col-xs-offset-2  col-sm-6 col-sm-offset-3 col-md-4 col-sm-offset-4 col-lg-2 col-lg-offset-5">
                <h1 style="color:lime;">PHP Face Detect</h1>
                <div class="form-group">
                    <label for="image">Select image</label>
                    <input type="file" class="form-control-file" id="image" name="image" accept="image/jpg|jpeg">
                </div>
                <button class="btn btn-primary btn-block" type="sumbit">Detect Face</button>
            </form>
        </div>
    </div>
</body>

</html>