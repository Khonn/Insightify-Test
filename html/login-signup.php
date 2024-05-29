<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="wiewport" content="width=device-width, initial-scale=1.0">
        <script
            src="https://kit.fontawesome.com/64d58efce2.js"
            crossorigin="anonymous">
        </script>
        <title>Sign In & Sign Up Form</title>
        <link rel="stylesheet" href="css/login-signup.css">
    </head>
    <body>
        <div class="container">
            <div class="forms-container">
                <div class="signin-signup">

                    <form action="" class="sign-in-form">
                        <img src="img/img_insightifylogo.png" class="logo-image" alt="">
                        <h2 class="title">Log in to your account</h2>
                        <p class="text-field">email</p>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Input Email">
                        </div>
                        
                        <p class="text-field">password</p>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Input Password">
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                        <input type="submit" value="Sign In" class="btn solid">

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


                    <form action="" class="sign-up-form">
                        <h2 class="title">Create new account</h2>
                        <p class="text-field">username</p>
                        <div class="input-field">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Insert Username">
                        </div>
                        <p class="text-field">email</p>
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="text" placeholder="Insert Email">
                        </div>
                        <p class="text-field">password</p>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Insert Password">
                        </div>
                        <p class="text-field">confirm password</p>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Confirm Password">
                        </div>
                        <p class="text-field">date of birth</p>
                        <div class="input-field">
                            <i class="fas fa-calendar"></i>
                            <input type="date" placeholder="MM/DD/YYYY">
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

                        <img src="img/log.svg" class="image" alt="">
                    </div>

                    <div class="panel right-panel">
                        <div class="content">
                            <h3>Already registered?</h3>
                            <button class="btn transparent" id="sign-in-btn">Sign in here.</button>
                            <p>Continue your journey of learning with Insightify. Explore new topics, and expand your knowledge base effortlessly. 
                                Don't miss out on the latest insights—log in today and discover something new!</p>
                        </div>

                        <img src="img/register.svg" class="image" alt="">
                    </div>
                </div>
            </div>
        
        <script src="js/login-signup.js"></script>
    </body>
</html>