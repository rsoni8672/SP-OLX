<html>
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="../Css/aboutStyle.css" rel="stylesheet" type="text/css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>
        About Us
    </title>
</head>
<body>
<?php
function myFunc()
{

    include 'header.php';
}
myFunc();
?>
<div id="navbar">
    <a href="home.php">Home</a>
    <a href="sell.php">Sell</a>
    <a class="active" href="javascript:void(0)">About Us</a>
    <a href="login.php" style="float:right">LOG OUT</a>
    <a href="profile.php">Profile</a>
</div>

<script src="../JavaScript/aboutScript.js"></script>
<div class="aboutus-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="aboutus-content ">
                        <h1> ABOUT US  <span>Spolx</span></h1>
                        <p>We provide our customers a platform to sell what thhey have extra and buy what they need.<br>
                            A community where buyers and sellers both get benifitted.<br>
                            A software solution by <span>Prathmesh Talekar</span> and <span>Rahul Soni.</span></p>



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php
function myFunction()
{

    include 'footer.php';
}
myFunction();
?>

</body>
</html>