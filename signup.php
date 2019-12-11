<!--verify login 
 decide if the credentials entered are correct -->
 <?php
    @session_start();
    include('connect.php');
    //if user is already logged in 
    if (isset($_SESSION['username'])){
        echo '<script language="javascript">alert(User is already logged in please logout first )</script>'; 
        header('refresh:5','location:./index.php');
    }
    //setting variable using post array
    $user = $_POST['username'];
    $password = $_POST['password'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    //
    $query1="INSERT INTO `user`(`username`, `phone_no`, `email`, `password`) VALUES ('$user','$phone','$email','$password');";

    $res1 = mysqli_query($conn, $query1);
    
    $query = "select * from user where username = '$user'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($res);


    if(mysqli_num_rows($res) > 0){

        if(strcmp($row['password'],$password)==0){
        //if the user exists then create seesion variables emailid and password
        $_SESSION['username']=$user;
        $_SESSION['password']=$password;
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone_no'] = $row['phone_no'];
        //redirect to explore page
        header('Location: explore.php');
    }
    // $_SESSION['username']=$user;
    // $_SESSION['password']=$password;
    // $_SESSION['email'] = $email;
    // $_SESSION['phone_no'] =$phone;
    //redirect to explore page
    //header('Location: explore.php');
}
    
?>