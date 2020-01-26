<html>
<head>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="../Css/loginStyle.css" rel="stylesheet" type="text/css">
    <title>
        Login
    </title>
    <div style="text-align: center; margin-top: 30px;">
        <h1 style="background-color: rgba(255,255,255,0.8)">
            SPOLX
        </h1>
    </div>

</head>
<body background="../Images/bgimage.jpg">
<form action="profile.php" class="login">
    <div class="field">
        <input id="email" name="email" placeholder="john_doe@example.com" type="email">
        <label for="email">Email</label>
    </div>
    <div class="field">
        <input id="password" name="password" placeholder="*******" type="password">
        <label for="password">Password</label>
    </div>
    <div>
        <input type="submit" value="LOG IN">
    </div>
</form>
<button id="regButton">New to SPOLX? Register Now</button>
<!-- The Modal -->
<div class="modal" id="regModal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <form action="profile.php" method="post">
            <div class="grid-container">
                <div class="item1">
                    <div class="field">
                        <input id="name" name="name" placeholder="john" type="text">

                        <label for="name">Name</label>
                    </div>
                    <div class="field">
                        <input id="surname" name="surname" placeholder="doe" type="text">
                        <label for="surname">Surname</label>
                    </div>
                    <div class="field">
                        <input id="country" name="country" placeholder="India" type="text">
                        <label for="country">Country</label>
                    </div>
                    <div class="field">
                        <input id="dob" name="dob" placeholder="ddmmyyyy" type="date">
                        <label for="dob">DOB</label>
                    </div>
                </div>
                <div class="item2">
                    <div class="field">
                        <input id="username" name="username" placeholder="john_doe" type="text">
                        <label for="username">Username</label>
                    </div>
                    <div class="field">
                        <input id="password1" name="password" placeholder="*******" type="password">
                        <label for="password1">Password</label>
                    </div>
                    <div class="field">
                        <input id="email1" name="email" placeholder="john_doe@example.com" type="email">
                        <label for="email1">Email</label>
                    </div>
                    <div class="field">
                        <input id="contact" name="contact" placeholder="9878234387" type="number">
                        <label for="contact">Contact</label>
                    </div>
                </div>
            </div>
            <div>
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</div>
<br>
<a href="home.php" style="text-decoration: none">
    <button>Continue as GUEST</button>
</a>
<script src="../JavaScript/loginScript.js"></script>
</body>
</html>