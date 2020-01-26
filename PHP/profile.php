<html>
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="../Css/profileStyle.css" rel="stylesheet" type="text/css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>
        PROFILE
    </title>
</head>
<style>
    body{padding-top:30px;}

    .glyphicon {  margin-bottom: 10px;margin-right: 10px;}

    small {
        display: block;
        line-height: 1.428571429;
        color: #999;
    }
</style>
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
    <a href="aboutus.php">About Us</a>
    <a href="login.php" style="float:right">LOG OUT</a>
    <a class="active" href="javascript:void(0)">Profile</a>
</div>


<script src="../JavaScript/profileScript.js"></script>
<div class="profile-area">
    <div class="container">
        <div class="row">
            <div>

                <div >
                    <div class="container">
                        <div class="row">
                            <div >
                                <div class="well well-sm">
                                    <div class="row">

                                        <div>
                                           <p> <h4>
                                                <?php
                                                if (isset($_POST['name'])) {
                                                    echo $_POST['name'];
                                                }
                                                else
                                                    echo "";

                                                if (isset($_POST['surname'])) {
                                                    echo $_POST['surname'];
                                                }
                                                else {
                                                    echo $name;
                                                }
                                                ?></h4>
                                             <h4> From <?php
                                                isset( $_POST['country']) ? $_POST['country'] : "";
                                                        ?></h4>

                                                <i class="glyphicon glyphicon-envelope"></i>
                                                <?php
                                                isset( $_POST['email']) ? $_POST['email'] : "";
                                                ?>


                                                <br>
                                                <i class="glyphicon glyphicon-gift"></i>Birth date: <?php
                                            isset( $_POST['dob']) ? $_POST['dob'] : "";

                                                ?></p>





                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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