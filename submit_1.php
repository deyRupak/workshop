<?php
@session_start();
include('connect.php');

$username=$_SESSION['username'];
if (isset($_POST['submit'])){
$title=$_POST['title'];
$content=$_POST['comment'];
$date = date("Y/m/d");
$category=$_POST['category'];

// $query1 = "SELECT * FROM `article` WHERE title = '$title'";
// $res1 = mysqli_query($conn,$query1);
// if(mysqli_num_rows($res1) >0){
//     echo "<script>alert('Try some other title!')</script> " ;
//     header('refresh:5','location:submit.php');
// }
// else{

$query1 = "INSERT INTO `article`( `username`, `date`, `category`, `title`, `content`) VALUES  ('$username','$date','$category','$title','$content')";
header('location:explore.php');



//  }
}
else{
    ?>
    <script>
    alert('Error!!');
    window.location.href("explore.php")
</script>
    <?php
}

?>