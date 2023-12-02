<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../assets/css/master.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css">

    <title>Sign</title>
</head>

<body>

    <div class="container" id="container">

         <div class="form-container signup-container">
            <form action="../../controllers/SignupController.php" method="post">
                <h1>Sign Up Here.</h1>
                <input type="text" placeholder="First name" name="firstname" required>
                <input type="text" placeholder="last name" name="lastname" required>
                <input type="tel" placeholder="Phone number" name="phonenumber" />
                <input type="email" placeholder="Email" name="email" required> 
                <button type="submit" name="submit">Sign Up</button>
            </form>
         </div>

         <div class="form-container login-container">
            <form action="../../controllers/LoginController.php" method="post">
                <h1>Login Here</h1>
                <input type="text" placeholder="Username" name="username" required />
                <input type="password" placeholder="Password" name="password" required />

               <!-- <div class="content">
                    <div class="checkbox">
                      <input type="checkbox" name="checkbox" id="checkbox">
                      <label >Remember me</label>
                    </div>
                    <div class="pass-link">
                        <a href="#">Forgot password</a>
                    </div>
                </div>  -->
                <button type="submit" name="submit">Login</button>
            </form>
         </div>

         <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 class="title">Hello <br> Freelancer</h1>
                    <p>if you have an account,login here and start working!</p>
                    <button class="ghost" id="login">Login
                        <i class="lni lni-arrow-left login"></i>
                    </button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1 class="title">Start your <br> Career now!</h1>
                    <p>if you don't have an account yet,join us and start working from any place around the world.</p>
                    <button class="ghost" id="signup">Sign Up
                        <i class="lni lni-arrow-right signup"></i>
                    </button>
                </div>
            </div>
         </div>

    </div>
    <script src="../../assets/js/script.js"></script>
</body>
</html>