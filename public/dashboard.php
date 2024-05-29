<html>
<head>

    <title>Dashboard - Insightify</title>
    <link rel="icon" href="./logo/symbol_blue.png">

    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/header.css">

    <!-- FOR ICONS -->
    <script src="https://kit.fontawesome.com/ed08dfa832.js" crossorigin="anonymous"></script>

    <script src="./js/dropdown_header.js" defer> </script>
</head>

<body>
    
    <header>
        <div class="logo_container">
            <a href="">
                <img class="logo" src="./logo/symbol+full_blue2.png" alt="logo"></img>
            </a>
        </div>
                
        <nav class="nav">

            <div class="nav_links_container">

                <ul class="nav_list">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="collection.php">Collection</a></li>
                    <li><a href="homepage.php">About</a></li>
                    <li><a href="html_tools.php">Tools</a></li>
                </ul>

            </div>

            <div class="dropdown_container"> 
                <button class="dropdown_button">
                    <img src="./img/profile.png" alt="Profile Icon">
                    <i class="fa-solid fa-angle-down"></i>
                </button>

                <div class="dropdown_content">

                    <div class="user_container">
                        <img src="./img/profile.png" alt="Profile Icon">

                        <div class="user_info_dropdown">
                            <p style="font-weight: 700; font-size: 20px;"> @red.pogi</p>
                            <p class="email_dropdown">email@gmail.com</p>
                        </div>
                        
                    </div>

                    <hr class="divider1">

                    <a href="account_settings.php">Account Settings</a>
                    <a href="about.php">About Insightify</a> 
                    <a href="store_link_3">Get Insightify App</a>
                    <a href="privacy_policy.php">Privacy Policy</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="terms.php">Terms and Condition</a>

                    <hr class="divider2">

                    <a href="login_signup.php" style=" margin: 8px 0px;">Log Out</a>
                </div>
            </div>
        </nav>
    </header>




    <div class="content">

        <h1 class="welcome">Welcome back, Chingu</h1>

        <!-- OVERVIEW -->
        <div class="stat_card">
            <div class="container">
                
                <div class="stat_container">
                    <h2 class="desc">Titles</h2>
                    <h1 class="figure">001</h1>
                </div>
                <div class="stat_container">
                    <h2 class="desc">Entries</h2>
                    <h1 class="figure">001</h1>
                </div>
                <div class="stat_container">
                    <h2 class="desc">Favorites</h2>
                    <h1 class="figure">001</h1>
                </div>

                <img src="./img/img_dashboard_book.png" alt="studying_girl">
            </div>
            
        </div>


        <!-- FEATURES -->
        <h1 class="feature">Features</h1>
        <div class="feature_card">
            <div class="feat_container">
                <div class="feat_btn">
                    <img class="icon" src="./graphics/paraphrase1.png" alt="icon">
                    <div>
                        <h2 class="name">Paraphraser</h2>
                        <h3 class="desc">rewrite sentences</h3> 
                    </div>
                </div>
                <div class="feat_btn">
                    <img class="icon" src="./graphics/translate.png" alt="icon">
                    <div>
                        <h2 class="name">Translator</h2>
                        <h3 class="desc">change language</h3> 
                    </div>
                </div>
                <div class="feat_btn">
                    <img class="icon" src="./graphics/cite.png" alt="icon">
                    <div>
                        <h2 class="name">Cite Generator</h2>
                        <h3 class="desc">cite sources</h3> 
                    </div>
                </div>
                
            </div>
            <div class="feat_container">
                <div class="feat_btn">
                    <img class="icon" src="./graphics/simplify.png" alt="icon">
                    <div>
                        <h2 class="name">Simplifier</h2>
                        <h3 class="desc">rewrite sentences</h3> 
                    </div>
                </div>
                <div class="feat_btn">
                    <img class="icon" src="./graphics/quiz.png" alt="icon">
                    <div>
                        <h2 class="name">Quiz</h2>
                        <h3 class="desc">test your knowledge</h3> 
                    </div>
                </div>
                <div class="feat_btn">
                    <img class="icon" src="./graphics/flashcard.png" alt="icon">
                    <div>
                        <h2 class="name">Flashcard</h2>
                        <h3 class="desc">make your own cards</h3> 
                    </div>
                </div>
                
            </div>
        </div>
        <div class="other_card">
            <div class="news_main">
                <h1 class="news">News</h1>
                <img src="./graphics/ad.png" alt="ad">
            </div>
            <div class="recos_main">
                <h1 class="reco">Recommendations</h1>
                <img src="./graphics/reco.png" alt="reco">
            </div>
        </div>
    </div>


</body>

</html>