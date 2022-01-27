<?php
include("class.php");
$err='';
    if(isset($_POST['submit']))
    {
        $uname= $_POST['Uname'];
        $email= $_POST['Email'];
        $name= $_POST['Name'];
        $age= $_POST['Age'];
        $city= $_POST['City'];
        $tmp=$_FILES['Image']['tmp_name'];
        $fname=$_FILES['Image']['name'];

        if(!empty($uname) && !empty($email) && !empty($name) && !empty($age) && !empty($city) && !empty($tmp))
        {
            $obj=new Project();
           $err=$obj->Data_Enter($uname,$email,$name,$age,$city,$tmp,$fname);
        }
        else
        {
            $err = "Fill All The Fields";
        }


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
    .mycolor{
        color: #3DECF4;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
        padding: 10px 0px 10px 0px ;

    }
    .bgcc{

        background-image: url("back4.jpg");
        background-size: cover; 
        background-repeat: no-repeat ;  
    }
    .mycls{
        opacity: .9;
        margin: 100px 0px 0px 425px ;
        border-radius: 10px;
    }
</style>

</head>
<body class="bgcc">

<?php  if(!empty($err)) { ?>
        <div class='alert alert-warning'> <?php echo $err; ?> </div>
    <?php  }?>

    <div class=" border container col-5 mycls bg-dark">
        <div class="h1 text-center mycolor">Add Data</div>
        <form method="POST" enctype="multipart/form-data">
            <div class="">
                <input type="text" name="Uname" class="mb-2 form-control" placeholder="User Name" >
            </div>

            <div class="">
                <input type="text" name="Email" class="mb-2 form-control" placeholder="Email" >
            </div>

            <div class="">
                <input type="text" name="Name" class="mb-2 form-control" placeholder="Name" >
            </div>

            <div class="">
                <input type="number" name="Age" class="mb-2 form-control" placeholder="Age" >
            </div>

            <div class="">
                <input type="text" name="City" class="mb-2 form-control" placeholder="City" >
            </div>

            <div class="text-center">
            <span class="h4 text-warning">Choose Image</span>
            <input type="file" name="Image" class="mb-3" >
            </div>

            <div class="col-5 m-auto">
                <input type="submit" name="submit" class="mb-2 form-control btn-success">
            </div>

        </form>
    </div>





</body>
</html>