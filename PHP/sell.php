<html>
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="../Css/sellStyle.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>
        Sell
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".flip").click(function(){
                $(".panel").slideToggle("slow");
            });

            $("#submit_form").click(function(){
                if($('#name').val() == ''){
                    alert('Name can not be left blank');


                }
                if($('#product_price').val() == ''){
                    alert('Price can not be left blank');


                }


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
    <a class="active" href="javascript:void(0)">Sell</a>
    <a href="aboutus.php">About Us</a>
    <a href="login.php" style="float:right">LOG OUT</a>
    <a href="profile.php">Profile</a>
</div>



<div class="container">
    <h2> ADD ITEMS TO SELL</h2>
    <br>
    <form action="/action_page.php">
        <input type="file" name="pic" accept="image/*">
        <input type="submit">
    </form>
    <form>

        <div class="form-group">
            <label for="name"> Product Name:</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="price">Product price:</label>
            <input type="text" id  ="product_price"class="form-control" id="price">
        </div>
        <div class="form-group">
            <label for="desc"> Description:</label>
            <input type="text"class="form-control" id="desc">

        </div>
    </form>
    <button type="button" id = "submit_form" class="btn btn-primary">ADD to SELL</button>
</div>

<?php

include 'footer.php';
?>

</body>
</html>