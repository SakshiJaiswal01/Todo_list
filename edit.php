<?php
include("class.php");
    
    $id=$_GET['edit'];
    $ob=new Project();
    $arr=$ob->Taking_data($id);
if(isset($_POST['EDIT']))
{
    
    $ob->Update_user($_POST['Uname'],$_POST['Email'],$_POST['Name'],$_POST['Age'],$_POST['City'],$id);


}

?>





<!DOCTYPE html>
<html? lang="en">
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
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: bold;
        padding: 10px 0px 10px 0px ;

    }
    .bgcc{

        background-image: url("back3.jpg");
        background-size: cover; 
        background-repeat: no-repeat ;  
    }
    .mycls{
        opacity: .8;
        margin: 100px 0px 0px 400px ;
        border-radius: 10px;
    }
</style>

</head>
<body class="bgcc">


<div class=" border container col-5 mycls bg-dark">
        <div class="h1 text-center mycolor">Edit Data</div>
        <form method="POST" enctype="multipart/form-data">
            <div class="">
                <input type="text" name="Uname" class="mb-2 form-control" placeholder="User Name" value="<?=$arr['Uname']?>">
            </div>

            <div class="">
                <input type="text" name="Email" class="mb-2 form-control" placeholder="Email" value="<?=$arr['Email']?>">
            </div>

            <div class="">
                <input type="text" name="Name" class="mb-2 form-control" placeholder="Name" value="<?=$arr['Name']?>">
            </div>

            <div class="">
                <input type="number" name="Age" class="mb-2 form-control" placeholder="Age" value="<?=$arr['Age']?>">
            </div>

            <div class="">
                <input type="text" name="City" class="mb-2 form-control" placeholder="City" value="<?=$arr['City']?>">
            </div>

         

            <div class="col-5 m-auto">
                <input type="submit" name="EDIT" class="mb-2 form-control btn-success" placeholder="Email" >
            </div>

        </form>
    </div>


</body>
</html?