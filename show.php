<?php
include("class.php");

 $obj=new Project();
 $arr=$obj->show_Data();
//  foreach ($arr as $i)
//  {
//       echo "<pre>";
//             print_r($i['Email']);
//             echo "</pre>";
//  }

if(!empty($_GET['del'])){
    
    $ob=new Project();
    $ob->Delete($_GET['del']);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

<style>
   .mydiv{
       opacity: .8;
   }
   .apnacolor{color: #D9FF07;}
   .text-apna{color: #00FFD1;}
    .bgcc{

        background-image: url("back2.jpg");
        background-size: cover; 
        background-repeat: no-repeat ;  
    }
    .apnaborder{
        border-radius: 20px;
        box-shadow: 10px 5px 5px black;
    }
    
</style>

</head>
<body class="bgcc">

<div class="container col-8 bg-dark mt-5 mydiv pt-3 apnaborder" >
    <div class="mb-5">
        <a href="add.php" class="btn btn-success float-right">
        <i class="bi bi-plus-lg"></i> Add User</a>
    </div>
    <table class="table text-light">
        <tr class="text-dark">
            <th class="h4 text-warning" scope="col">User Name</th>
            <th class="h4 text-warning" scope="col">Email</th>
            <th class="h4 text-warning" scope="col">Name</th>
            <th class="h4 text-warning" scope="col">Age</th>
            <th class="h4 text-warning" scope="col">City</th>
            <th class="h4 text-warning" scope="col">Image</th>
            <th class="h4 text-warning" scope="col">Action</th>
        </tr>
<?php foreach ($arr as $i) { ?>

        <tr class="h5">
            <td><?php echo $i['Uname']; ?></td>
            <td><?php echo $i['Email']; ?></td>
            <td><?php echo $i['Name']; ?></td>
            <td><?php echo $i['Age']; ?></td>
            <td><?php echo $i['City']; ?></td>
            <td>
                <img src="<?php echo $i['Image']; ?>" width="50" height="50" style="border-radius:50%">
            </td>
            
            <td>
           <span class="h3">
               <a href="edit.php?edit=<?php echo $i['id']; ?>"><i class="bi bi-pencil-square  apnacolor"></i></a>
           </span>

           <span class="h3">
               <a href="?del=<?php echo $i['id']; ?>"> <i class="bi bi-trash  text-apna"></i></a>
           </span>

           <span class="h3">
               <a href="changimg.php?edit=<?php echo $i['id']; ?>"> <i class="bi bi-image"></i> </a>
           </span>

            </td>
        </tr>

<?php }?>
    </table>    
</div>

</body>
</html>