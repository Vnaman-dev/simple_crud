<?php
require_once __DIR__.'/connect.php';


if(isset($_POST['register_btn']))
{
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];

    $sql="insert into crud_self(fname,lname,email,password,mobile) values('$fname','$lname','$email','$password','$mobile')";

    $query_run=mysqli_query($conn,$sql);
    if($query_run){
        echo 'register successfully';
        header('Location:index.php');
    }else{
        echo 'OOPs, Something went wrong';
        header('Location:index.php');
    }

}else{

}

##################################################
#delete
################################################

if(isset($_POST['reg_delete_btn']))
{
    $delete_id=$_POST['delete_id'];

    $delete="delete from crud_self where id='$delete_id'";

    $del_query_run=mysqli_query($conn,$delete);

    if($del_query_run)
    {
        echo 'record deleted';
        header("Location:index.php");
    }
    else{
        echo 'record not deleted';
        header("Location:index.php");
    }
}

##################################################
#update
################################################

if(isset($_POST['update_btn']))
{
    $eid=$_POST['edit_id'];
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $update="update crud_self set fname='$fname',lname='$lname',email='$email',mobile='$mobile' where id='$eid'";

    $update_query_run=mysqli_query($conn,$update);

    if($update_query_run)
    {
        //echo 'record deleted';
        header("Location:index.php");
    }
    else{
        //echo 'record not deleted';
        header("Location:index.php");
    }
}
?>