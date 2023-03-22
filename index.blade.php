<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Essay Speed Checker</title>
</head>
<body>
    <div id="overlay" onclick="off(this.id)">
        
    </div>
    <div id="sign-in-space">
        <div id="sign-in-modal">
            <div id="login-title">Sign In</div>
            <div class="sign-in-label">email</div>
            <div><input type="text"></div>
            <div class="sign-in-label">password:</div>
            <div><input type="password"></div>
            <div id="login-cred">Log In</div>
            <div id="sign-up-now-btn">Sign up now</div>
        </div>
    </div>
    <div id="sign-up-space">
        <div id="sign-up-modal">
            <div id="register-title">Sign Up</div>
            <div id="sign-up-role"><div class="select-role-icon"><i class="material-icons">school</i></div><div class="select-role-icon"><i class="material-icons">person</i></div><div class="select-role-icon"><i class="material-icons">supervisor_account</i></div></div>
            <div id="sign-up-content">
                <div class="sign-up-label">username :</div>
                <div><input type="text"></div>
                <div class="sign-up-label">email :</div>
                <div><input type="email"></div>
                <div class="sign-up-label">password :</div>
                <div><input type="password"></div>
                <div class="sign-up-label">confirm password :</div>
                <div><input type="password"></div>
                <div class="sign-up-label">cellphone number :</div>
                <div><input type="tel" placeholder="11 digits" pattern="[0-9]{11}" required></div>
                <div class="sign-up-label">company name :</div>
                <div><input type="text"></div>
                <div class="sign-up-label">upload 1x1 profile picture :</div>
                <div><input type="file"></div>
                <div id="register-cred">Register</div>
            </div>
            
        </div>
    </div>
    <div id="navbar">
        <div id="navbar-left">
            <div id="navbar-title">ESSAY SPEED CHECKER</div>
        </div>
        <div id="navbar-right">
            <div id="sign-in-btn" onclick="on(this.id)">LOG IN</div>
            <div id="sign-up-btn" onclick="on(this.id)">SIGN UP</div>
        </div>        
    </div>
    <div id="dashboard-content">
        <div>
            <img src="images/image-1.gif" alt="">
            <div class="persuade-text">ESCAPE ESSAY</div>
            <div class="persuade-text">PAPER WORK HELL</div>
        </div>
        <div>
            <img src="images/image-2.gif" alt="">
            <div class="persuade-text">SWIFTLY FINISH</div>
            <div class="persuade-text">CHECKING ESSAYS</div>
        </div>
        <div>
            <img src="images/image-3.gif" alt="">
            <div class="persuade-text">COMMIT YOUR HOURS</div>
            <div class="persuade-text">TO WHAT MATTERS</div>
        </div>
    </div>
    <script>
        function on(input) {
            document.getElementById("overlay").style.display = "block";
            if(input == "sign-in-btn"){
                document.getElementById("sign-in-modal").style.display = "flex";
            } else {
                document.getElementById("sign-up-modal").style.display = "flex";
            }
        
        
        }

        function off(input) {
            if(input == "overlay"){
                document.getElementById("overlay").style.display = "none";
                document.getElementById("sign-in-modal").style.display = "none";
                document.getElementById("sign-up-modal").style.display = "none";
            }
        
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>