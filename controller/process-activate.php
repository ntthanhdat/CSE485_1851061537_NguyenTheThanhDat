<?php
// include('config.php');
// $id=$_GET['userid'];
// $code=$_GET['code'];
// $sql1="select * from users where userid='$id'";
// $result=mysqli_query($conn,$sql1);
// if(mysqli_num_rows($result)>0){
//     $user=mysqli_fetch_assoc($result);
// }  
// if($user['activation_code']==$code){
//     $sql="update users set status =1 where userid='$id'";
//     $result=mysqli_query($conn,$sql);
//     if($result){
//         header('Location:index.php');
//     } 
//     else{
//         $e="Your active code may not be working properly!";
//         header ("Location:../error.php?error=$e");
//     }

// }

?>
<?php
 
 include('config.php');

if(isset($_GET['userid']) && isset($_GET['code'])){
    $id=$_GET['userid'];
    $code=$_GET['code'];
    $sql1="select * from users where userid='$id'";
    $result=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result)>0){
        $user=mysqli_fetch_assoc($result);
        if($user['activation_code']==$code){
            $sql="update users set status =1 where userid='$id'";
            $result=mysqli_query($conn,$sql);
            if($result){
                header('Location:../active-thank.php');
            } else{
                $e= mysqli_error($conn);
                header ("Location:../error.php?error=$e");
            }
            
        
        }else{
            $e="Your active code may be incorrect!";
            header ("Location:../error.php?error=$e");
        }
    }  
    else{
        $e="Your id code may be incorrect!";
        header ("Location:../error.php?error=$e");
    }

    
}
else{
  $e="Sorry, you've made an invalid request. Please go back!";
  header ("Location:../error.php?error=$e");
}
 ?>