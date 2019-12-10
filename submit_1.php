<?php
@session_start();
include('connect.php');

$username=$_SESSION['username'];
if (isset($_POST['submit'])){
$title=$_POST['title'];
$content=$_POST['comment'];
$date = date("Y/m/d");

$query1 = "SELECT * FROM `article` WHERE title = '$title'";
$res1 = mysqli_query($conn,$query1);
if(mysqli_num_rows($res1) >0){
    echo "<script>alert('Try some other title!')</script> " ;
    header('location:submit.php');
}
else{

$query = "INSERT INTO `article`(`username`, `date`, `title`, `content`) VALUES ('$username','$date','$title','$content')";
$res = mysqli_query($conn, $query);

?>
<!-- <script>
    alert('Inserted Record!');
    window.location.href("explore.php")
</script> -->

<?php
echo "<script>alert('Post uploaded!')</script> " ;
header('location:explore.php');
 }
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