<html>

    <head>
        <title>Collection - Insightify</title>
        <link rel="icon" href="./logo/symbol_blue.png">

        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="./css/collection_and_entries.css">
        <link rel="stylesheet" href="./css/header.css">

        <script src="./js/collection_and_entries.js" defer> </script>

        <script src="https://kit.fontawesome.com/ed08dfa832.js" crossorigin="anonymous"></script>

        
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


            <p style="color: #505050; font-size: 20px; margin-left: 130px; margin-top: 100px;">Collection</p>

            <div class="row">
                <div class="column">
                    <div class="tab" style="margin-left: 130px;">
                        <button class="tablinks" onclick="openCity(event, 'All')" id="defaultOpen">All</button>
                        <button class="tablinks" onclick="openCity(event, 'Favorites')">Favorites</button>
                        <button class="tablinks" onclick="openCity(event, 'Book')">Book</button>
                        <button class="tablinks" onclick="openCity(event, 'Others')">Others</button>
                    </div>
                </div>
                <div class="column">
                    <button class="buttonaddtitle" style="margin-left: 20px; margin-right: 20px;">Add Title </button>
                </div>
                <div class="column">
                    <div style="border-bottom: 0.5px solid #9E9E9E;"></div>
                </div>
              </div>



            <div id="All" class="tabcontent">
                <div class="rowall">
                    <div class="columnall">
                        <div class="card">
                            <div class="container">

                                <div class="cardinfo">
                                    <p class="title"> Title </p>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td style="font-weight: 700;">Author:</td>
                                            <td>Author Name</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Type:</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Genre:</td>
                                            <td>Genre</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Last Updated:</td>
                                            <td>YYYY-MM-DD</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="button-container">
                                    <button class="leftbtn">View Entries</button>
                                    <button class="rightbtn">Delete</button>
                                </div>
                                 
                            </div>
                          </div>
                    </div>

                    <div class="columnall">
                        <div class="card">
                            <div class="container">

                                <div class="cardinfo">
                                    <p class="title"> Title </p>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td style="font-weight: 700;">Author:</td>
                                            <td>Author Name</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Type:</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Genre:</td>
                                            <td>Genre</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Last Updated:</td>
                                            <td>YYYY-MM-DD</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="button-container">
                                    <button class="leftbtn">View Entries</button>
                                    <button class="rightbtn">Delete</button>
                                </div>
                                 
                            </div>
                          </div>
                    </div>

                    <div class="columnall">
                        <div class="card">
                            <div class="container">

                                <div class="cardinfo">
                                    <p class="title"> Title </p>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td style="font-weight: 700;">Author:</td>
                                            <td>Author Name</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Type:</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Genre:</td>
                                            <td>Genre</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Last Updated:</td>
                                            <td>YYYY-MM-DD</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="button-container">
                                    <button class="leftbtn">View Entries</button>
                                    <button class="rightbtn">Delete</button>
                                </div>
                                 
                            </div>
                          </div>
                    </div>
                  </div>


                  <div class="rowall">
                    <div class="columnall">
                        <div class="card">
                            <div class="container">

                                <div class="cardinfo">
                                    <p class="title"> Title </p>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td style="font-weight: 700;">Author:</td>
                                            <td>Author Name</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Type:</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Genre:</td>
                                            <td>Genre</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Last Updated:</td>
                                            <td>YYYY-MM-DD</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="button-container">
                                    <button class="leftbtn">View Entries</button>
                                    <button class="rightbtn">Delete</button>
                                </div>
                                 
                            </div>
                          </div>
                    </div>

                    <div class="columnall">
                        <div class="card">
                            <div class="container">

                                <div class="cardinfo">
                                    <p class="title"> Title </p>
                                    <hr>
                                    <table>
                                        <tr>
                                            <td style="font-weight: 700;">Author:</td>
                                            <td>Author Name</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Type:</td>
                                            <td>Type</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Genre:</td>
                                            <td>Genre</td>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: 700;">Last Updated:</td>
                                            <td>YYYY-MM-DD</td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="button-container">
                                    <button class="leftbtn">View Entries</button>
                                    <button class="rightbtn">Delete</button>
                                </div>
                                 
                            </div>
                          </div>
                    </div>


                    <div class="columnall">
                        <div class="card add-card">
                            <img style="height: 100px; width: 100px; padding-top: 90px;" src="/img/addcard.png">
                            <button style="padding-bottom: 80px;">Add Title</button>
                        </div>
                    </div>

                  </div>
            </div>
            
            <div id="Favorites" class="tabcontent">
            </div>
            
            <div id="Book" class="tabcontent">
            </div>

            <div id="Others" class="tabcontent">
            </div>

        
    </body>




</html>