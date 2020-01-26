<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Css/homeStyle.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>
        Home
    </title>
</head>
<script>
    $(document).ready(function(){





        $(".flip").click(function(){
            $(".panel").slideToggle("slow");


        });
        $("#add_cart1").click(function(){
            $("#add_cart1").text("Added to cart");
            $("#add_cart1").css("background-color", "black");
        });


        $("#add_cart2").click(function(){
            $("#add_cart2").text("Added to cart");
            $("#add_cart2").css("background-color", "black");
        });

        $("#add_cart3").click(function(){
            $("#add_cart3").text("Added to cart");
            $("#add_cart3").css("background-color", "black");
        });

        $("#add_cart4").click(function(){
            $("#add_cart4").text("Added to cart");
            $("#add_cart4").fadeIn();
            $("#add_cart4").css("background-color", "black");
        });
    });
</script>
<style>
    .panel, .flip {
        padding: 5px;
        text-align: center;
        background-color: #e5eecc;
        border: solid 1px #c3c3c3;
    }

    .panel {
        padding: 50px;
        display: none;
    }
    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        background-color: #2196F3;
        padding: 10px;
        width: 100%;
    }
    .grid-item {
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.8);
        padding: 20px;
        font-size: 30px;
        text-align: center;
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


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spolx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$conn->close();
?>

<div id="navbar">
    <a class="active" href="javascript:void(0)">Home</a>
    <a href="sell.php">Sell</a>
    <a href="aboutus.php">About Us</a>
    <a href="login.php" style="float:right">LOG OUT</a>
    <a href="profile.php">Profile</a>
</div>

<script src="../JavaScript/homeScript.js"></script>

<div>
    <h1>LIST OF ITEMS</h1>
    <br>

    <script src="../JavaScript/sellScript.js"></script>
    <ul id = "my_list">
        <li><div class="flip">speakers</div>
            <div class="panel"> <img class="img-responsive" src="../Images/speakers.jpg" width="100" height="100">
                <br>Price:Rs.1000/-<br>Available<br><button  type="button" class="btn btn-primary">Buy</button>&nbsp;&nbsp;
                <button id ="add_cart1" type="button" class="btn btn-primary">Add to cart</button>
            </div>
        </li>


        <li><div class="flip">headphones</div>
            <div class = "panel"> <img class="img-responsive" src="../Images/headimage.jpg" width="100" height="100"><br>Price:Rs.1000/-<br>
                Available<br><button type="button" class="btn btn-primary">Buy</button>&nbsp;&nbsp;
                <button id ="add_cart2" type="button" class="btn btn-primary">Add to cart</button></div></li>

        <li><div class="flip">earphones</div>
            <div class = "panel">  <img class="img-responsive" src="../Images/earphones.jpg" width="100" height="100">
                <br>Price:Rs.1000/-<br>Available<br><button type="button" class="btn btn-primary">Buy</button>&nbsp;&nbsp;
                <button id ="add_cart3" type="button" class="btn btn-primary">Add to cart</button>&nbsp;&nbsp;</div></li>

        <li><div class="flip">Television</div>
            <div class = "panel"> <img class="img-responsive" src="../Images/TV.jpg"  width="100" height="100">
                <br>Price:Rs.1000/-<br>Available<br>
                <button type="button" class="btn btn-primary">Buy</button>&nbsp;&nbsp;
                <button id ="add_cart4" type="button" class="btn btn-primary">Add to cart</button>
            </div>
        </li>

    </ul>
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