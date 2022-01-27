<?php 
class Project
{
    private $conn;
    public $Error='';
//Connection HERE 
    function __construct()
    {
       $this->conn = mysqli_connect("localhost","root","","oops");
    }

//ADD data 
    function Data_Enter($uname,$email,$name,$age,$city,$imgtemp,$imgname)
    {
        $dep="upload/";
        move_uploaded_file($imgtemp,$dep.$imgname);
        $imagepath=$dep.$imgname;

        $sql="insert into todo_data (Uname,Email,Name,Age,City,Image)
        values('$uname','$email','$name',$age,'$city','$imagepath')";

        
        if(mysqli_query($this->conn,$sql))
        {
            header("Location:show.php");
        }
        else
        {
            return "User Already Registered";
        }


    }


//Show data here only

    function show_Data()
    {
        $sql="select * from todo_data";
        $data=mysqli_query($this->conn,$sql);
        $arr1=[];
        if($data)
        {   
            while($aaa=mysqli_fetch_assoc($data))
            {
                array_push($arr1,$aaa);
            }
            return $arr1;
            // echo "<pre>";
            // print_r($arr1);
            // echo "</pre>";
        }
        else
        {
            $this->Error="NOT SHOWING DATA";
        }
    
    }


//Delete User
function Delete($id)
{
    $sqll="select * from todo_data where id=$id";
    $datta=mysqli_query($this->conn,$sqll);
    $datas=mysqli_fetch_assoc($datta);
    $old=$datas['Image'];
    $dep="upload";



    $sql="delete from todo_data where id=$id";

    if(mysqli_query($this->conn,$sql))
    {
        unlink($old);
        header("Location:show.php");
    }
    
}


//taking data 

function Taking_data($id)
{
    $sql="select * from todo_data where id=$id";
    $data=mysqli_query($this->conn,$sql);
    if($data)
    {
        $data1=mysqli_fetch_assoc($data);
        return($data1); 
    }

}


//alert
function Alert_user($a)
{
    echo "<script type='text/javascript'>alert('$a');</script>";
}

//UPDATE USERRR


function Update_user($uname,$email,$name,$age,$city,$id)
{
    // echo $city;
    $sql="update todo_data set Uname='$uname', Email='$email',Name='$name',Age='$age',City='$city' where id=$id";

    
    if(mysqli_query($this->conn,$sql))
    {
        $this->Alert_user("User Edit Sucessfull");
        


      header("Refresh:4;url=show.php");
    }
    else
    {
        return "User Already Registered";
    }
}

//change IMA?GE


function Change_Image($id,$imgtemp,$imgname)
{
    $sqll="select * from todo_data where id=$id";
    $datta=mysqli_query($this->conn,$sqll);
    $datas=mysqli_fetch_assoc($datta);
    $old=$datas['Image'];
    $dep="upload/";

    move_uploaded_file($imgtemp,$dep.$imgname);
    $imagepath=$dep.$imgname;
    echo $imagepath;

    $sql="update todo_data set Image='$imagepath' where id=$id";
    if(mysqli_query($this->conn,$sql))
    {
        unlink($old);
        header("Location:show.php");
    }
    else
    {
        echo "ERROR";
    }

}

//Destroy
    function __destruct()
    {
        mysqli_close($this->conn);
    } 
}



?>