<?php
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['email'])) {
    header ("Location: https://insightify-test-2q7f.onrender.com/dashboard.php");
}
else{
    ?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <title>Sign In - Insightify</title>
        <link rel="icon" href="./logo/symbol_blue.png">

        <meta charset="UTF-8">
        <meta name="wiewport" content="width=device-width, initial-scale=1.0">

        <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous">
        </script>

        <script src="./js/login_signup.js" defer></script>
        
        <link rel="stylesheet" href="./css/login_signup.css">
    </head>



    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">

                    <form action="login_function.php" class="sign-in-form" method="post">
                        <img src="./img/img_insightifylogo.png" class="logo-image" alt="">
                        <h2 class="title">Log in to your account</h2>
                        <?php if(isset($_GET['error'])){ ?> 
                        <p class="error"> <?php echo $_GET['error']; ?></p>
                    <?php } ?>
                        <p class="text-field">email</p>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Input Email" name="email">
                        </div>
                        
                        <p class="text-field">password</p>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Input Password" name="password">
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                            <button type="submit"   class="btn solid" style="font-family: Poppins;">Sign In</button> 
                          </a>

                        <p class="social-text">────────── or continue with ──────────</p>
                        <div class="social-media">
                            <a href="#" class="social-icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </form>


                    <form action="register.php" class="sign-up-form">
                        <h2 class="title">Create new account</h2>
                        <p class="text-field" name="register">username</p>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" name="username" placeholder="Insert Username">
                        </div>
                        <p class="text-field">email</p>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="text" name="email" placeholder="Insert Email">
                        </div>
                        <p class="text-field">password</p>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Insert Password">
                        </div>
                        <p class="text-field">confirm password</p>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Confirm Password">
                        </div>
                        <p class="text-field">date of birth</p>
                        <div class="input-field">
                            <i class="fas fa-calendar"></i>
                            <input type="date" name="dateofbirth" placeholder="MM/DD/YYYY">
                        </div>
                        <input type="submit" value="Sign up" class="btn solid">
                    </form>

                </div>
                <div class="panels-container">
                    <div class="panel left-panel">
                        <div class="content">
                            <h3>Don't have an account?</h3>
                            <button class="btn transparent" id="sign-up-btn">Sign up here!</button>
                            <p>Join our vibrant community to unlock a wealth of knowledge and personalized insights tailored to your interests and needs. 
                                Elevate your literacy and understanding—take the first step and sign up now!</p>
                        </div>

                        <img src="./img/log.svg" class="image" alt="">
                    </div>

                    <div class="panel right-panel">
                        <div class="content">
                            <h3>Already registered?</h3>
                            <button class="btn transparent" id="sign-in-btn">Sign in here.</button>
                            <p>Continue your journey of learning with Insightify. Explore new topics, and expand your knowledge base effortlessly. 
                                Don't miss out on the latest insights—log in today and discover something new!</p>
                        </div>

                        <img src="./img/register.svg" class="image" alt="">
                    </div>
                </div>
            </div>
        
        
    </body>
</html>

<?php } ?>