<?php
include 'modals.php';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css">
        <link rel="stylesheet" href="../../assets/css/master.css">

        <title>Sign</title>
    </head>

    <body>

        <div class="container" id="container">

            <!----- SignUp Form ------>
            <div class="form-container signup-container">
                <form method="post" action="../../controllers/SignupController.php">
                    <h1>Sign Up Here.</h1>
                    <input type="text" placeholder="First name" name="firstname" required />
                    <input type="text" placeholder="Last name" name="lastname" required />
                    <input type="tel" placeholder="Phone number" name="phonenumber" required />
                    <input type="email" placeholder="Email" name="email" title="Make sure to enter a valid email" required />
                    <label>You Are ?</label>
                    <div>
                        <label for="client">
                            <input type="radio" name="userRole" value="Client" id="client" style="max-width: min-content;" required />Client</label>
                        <label for="freelancer">
                            <input type="radio" name="userRole" value="Freelancer" id="freelancer" style="max-width: min-content;" />Freelancer</label>
                    </div>
                    <button type="submit" name="submit">Sign Up</button>
                </form>
            </div>


            <!------ Login Form ----->
            <div class="form-container login-container">
                <form method="post" action="../../controllers/LoginController.php">
                    <h1>Login Here</h1>
                    <input type="text" placeholder="Username" name="username" required />
                    <input type="password" placeholder="Password" name="password" required />
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>


            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1 class="title">Hello <br> Freelancer</h1>
                        <p>if you have an account,login here and start working!</p>
                        <button class="ghost" id="login">Login<i class="lni lni-arrow-left login"></i></button>
                    </div>

                    <div class="overlay-panel overlay-right">
                        <h1 class="title">Start your <br> Career now!</h1>
                        <p>if you don't have an account yet,join us and start working from any place around the world.</p>
                        <button class="ghost" id="signup">Sign Up<i class="lni lni-arrow-right signup"></i></button>
                    </div>
                </div>
            </div>

        </div>


        <script src="../../assets/js/script.js"></script>
    </body>

</html>