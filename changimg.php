<?php
include("class.php");
$id=$_GET['edit'];

$ob=new Project();
if(isset($_POST['submit']))
{
    $ftemp=$_FILES['Image']['tmp_name'];
    $fname=$_FILES['Image']['name'];
    $ob->Change_Image($id,$ftemp,$fname);

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <style>
        .mycolor {
            color: #3DECF4;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
            padding: 10px 0px 10px 0px;

        }

        .mycls {
            opacity: .8;
            margin: 200px 0px 0px 425px;
            border-radius: 10px;
        }

        .bgcc {

            background-image: url("back4.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body class="bgcc">
    <div class=" border container col-5 mycls bg-dark">
        <div class="h1 text-center mycolor">Choose New Image</div>
        <form method="POST" enctype="multipart/form-data">
            <div class="col-4 m-auto">

                <input type="file" name="Image" class="mb-2">
            </div>

            <div class="col-5 m-auto">
                <input type="submit" name="submit" class="mb-2 form-control btn-success" placeholder="Email">
            </div>

        </form>
    </div>

</body>

</html>