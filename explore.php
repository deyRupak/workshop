<!DOCTYPE html>
<html lang="en">

<?php
session_start();
//session variables
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $phone_no = $_SESSION['phone_no'];
    $email = $_SESSION['email'];
}
if (isset($_POST['travel'])){
    $_SESSION['category']='travel';
    header('Location:article.php');
}
//for food
else if (isset($_POST['food'])){
    $_SESSION['category']='food';
    header('Location:article.php');
}
//for music
else if (isset($_POST['music'])){
    $_SESSION['category']='music';
    header('Location:article.php');
}
?>
<head>
    <title>WDLx2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Code&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    
    <!-- Internal CSS -->
    <style>
        .header__bg {
            position: fixed;
            top: 32%;
            bottom: 0;
            right: 0;
            left: 0;
            width: 100%;
            height: 48%;
            background-image: linear-gradient(white, #3e4750);
            transform: skewY(-12deg);
            transform-origin: bottom right;
            z-index: -1;
        }

        #try {
            -webkit-box-shadow: 11px 11px 25px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 11px 11px 25px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 11px 11px 25px 0px rgba(0, 0, 0, 0.75)
        }
    </style>
</head>

<body>

    <!-- Header -->
    <p class="text-center" style="font-family: 'Bangers', cursive; font-size: 100px; margin-top: 2%;">Hello World!</p>

<?php if (isset($_SESSION['username'])){ ?>
    <!-- Navbar -->
    <div class=" d-flex justify-content-center">    
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 80%;">
        <a class="navbar-brand" href="#">Hello <?php echo($_SESSION['username'])  ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0" style="margin-right: 30px;">
                <a href="submit.php" class="btn btn-primary"><span
                            style="color: white">New
                            Post!</span></a>
            </form>

            <form class="form-inline my-2 my-lg-0">
                <a href="login.php" class="btn btn-primary"><span style="color: white">Logout</span></a>
            </form>
        </div>
    </nav>
    </div>
<?php } 

else { ?>
    <!-- Navbar -->
    <div class=" d-flex justify-content-center">    
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 80%;">
        <a class="navbar-brand" href="#">Hey Stranger (or something good) </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">


            <form class="form-inline my-2 my-lg-0">
                <a href="signup.html" class="btn btn-primary"><span style="color: white">Signup</span></a>
            </form>
        </div>
    </nav>
    </div>
<?php } ?>


    <br><br>
     <!-- Categories -->
    <div class="container">

        <!-- Gradient -->
        <div class="header__bg"></div>
        <form action="explore.php" method="POST">
        <div class="row">
            <div class="col-sm-4">
                <div class="card h-25" style="width:300px">
                    <img class="card-img-top" src="https://i.pinimg.com/originals/64/34/fd/6434fd61ffb801f0cfa14cdde0315d99.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">TRAVEL</h4>
                        <p class="card-text"></p>
                        <button class="btn btn-light col-sm-12" type="submit" id="travel"
                            name="travel"><b>explore</b></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card h-25" style="width:300px">
                    <img class="card-img-top" src="http://www.eatingbyelaine.com//wp-content/uploads/2018/12/IMG_0886.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">FOOD</h4>
                        <p class="card-text"></p>
                        <button class="btn btn-light col-sm-12" type="submit" id="food" 
                            name="food"><b>explore</b></button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card h-25" style="width:300px">
                    <img class="card-img-top" src="https://cdn.nohat.cc/thumb/f/350/17b7da9eb1894ff39c47.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">MUSIC</h4>
                        <p class="card-text"></p>
                        <button class="btn btn-light col-sm-12" type="submit" id="music"
                            name="music"><b>explore</b></button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>

    <br><br>



    <?php
if (isset($_SESSION['username'])){
?>
    <!-- Footer -->
    <div class="jumbotron text-center" style="background-color:transparent">
        <div class="btn-group text-center" style="font-family: 'Fira Code', monospace;">
            <div class="row">
                <div class="col-sm-3"><a href="login.php" class="btn" style="padding: .375rem 5rem;"><b>LOGOUT</b></a>
                </div>
                <div class="col-sm-3"><button type="button" class="btn" style="padding: .375rem 5rem;">
                        <a href="explore.php" class="btn" style="padding: .375rem 5rem;"><b>EXPLORE</b></a>
                </div>
                <div class="col-sm-3"><button type="button" class="btn"
                        style="padding: .375rem 5rem;"><b>ABOUT</b></button>
                </div>
                <div class="col-sm-3"><button type="button" class="btn"
                        style="padding: .375rem 5rem;"><b>CONTACT</b></button>
                </div>
            </div>
        </div>
    </div>
<?php  } 
else {
?>
    <!-- Footer -->
    <div class="jumbotron text-center" style="background-color:transparent">
        <div class="btn-group text-center" style="font-family: 'Fira Code', monospace;">
            <div class="row">
                <div class="col-sm-3"><button type="button" class="btn" style="padding: .375rem 5rem;">
                     <a href="signup.html" class="btn" style="padding: .375rem 5rem;"><b>SIGNUP</b></a>
                </div>

                <div class="col-sm-3"><button type="button" class="btn" style="padding: .375rem 5rem;">
                        <a href="explore.php" class="btn" style="padding: .375rem 5rem;"><b>EXPLORE</b></a>
                </div>

                <div class="col-sm-3"><button type="button" class="btn"
                        style="padding: .375rem 5rem;"><b>ABOUT</b></button>
                </div>
                <div class="col-sm-3"><button type="button" class="btn"
                        style="padding: .375rem 5rem;"><b>CONTACT</b></button>
                </div>

            </div>
        </div>
    </div>
<?php
}
?>
      
    
</body>

</html>


