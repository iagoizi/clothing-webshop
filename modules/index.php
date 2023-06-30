<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet">

    <title> HDAMN Clothing Company </title>
    <link type="text/css" rel="stylesheet" href="../styles/style.css">
        <link type="text/css" rel="stylesheet" href="../styles/navbar.css" />


    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['width']))
    {
        echo "<script>
        var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        var screenHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
      
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../phpscripts/setscreenres.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('width=' + screenWidth + '&height=' + screenHeight);
      </script>
      ";
    }


    if(!isset($_SESSION['name']))
    {
        session_unset();
        session_destroy();
        header('location: login.php');
    }
    ?>

        <nav id="navbar">
            <!-- <div id="user-container">
                <img src="../img/common/user-profile-circle.png" id="user-profile-pic">
                <b id="username">
                    Logged in as <?php 
                    
                        // echo $_SESSION['name'].", OS: ";
                        
                        // $userAgent = $_SERVER['HTTP_USER_AGENT'];

                        // if (strpos($userAgent, 'Windows') !== false) {
                        //     $os = 'Windows';
                        // } elseif (strpos($userAgent, 'Mac') !== false) {
                        //     $os = 'Mac';
                        // } elseif (strpos($userAgent, 'Linux') !== false) {
                        //     $os = 'Linux';
                        // } else {
                        //     $os = 'Unknown';
                        // }
                        // echo $os.", Screen resolution: ";
                        // echo $_SESSION['width'].'x'.$_SESSION['height'];


                    ?>
                </b>
            </div> -->
        </nav>

    <section id="banner">
        <img class="logo" src="../img/common/logo.png" style="top: 70px;">
        <div class="banner-text">
            <h1> Clothes Company </h1>
            <h2>Welcome to our website, <?php echo $_SESSION["name"]; ?>, you were last online: <?php 
            
            echo strval($_SESSION["date"]);
            
            $email = $_SESSION['email'];
            $id = $_SESSION['id'];
            $currentDate = date('Y-m-d H:i:s');
            $connection = mysqli_connect('localhost', 'Webshop_user', 'Webshop_password', 'webshop');
            $check_query = "UPDATE `users` SET `LAST_ONLINE` = '$currentDate' WHERE `users`.`ID` = '$id' ";
            
            $result = mysqli_query($connection, $check_query);
            
            ?></h2>
            <p> A STYLE FOR EVERY STORY.</p>

            <div class="banner-btn">
                <a href="expert.html"><span></span> About Us
                    <a href="news.html"> <span></span> News </a>

            </div>
        </div>

    </section>
    <div id="sideNav" >
        <nav>
            <ul>
                <li> <a href="#banner">HOME</a></li>
                <li> <a href="#Feature">FAVORITE</a></li>
                <li>
                    <a href="#Service">WHY US?</a>
                </li>
                <li> <a href="#testinomial">COMMENTS</a></li>
                <li> <a href="#footer">BEST-SELLING</a></li>
                <li> <a href="#footer">QUESTIONNAIRE</a></li>
            </ul>
        </nav>
    </div>
    <div id="menuBtn" style="top: 75px;">
        <img src="../img/common/menu.png" id="menu">
    </div>
    <!--Features-->
    <section id="Feature">
        <div class="title-text">
            <p> FEATURES</p>
            <h1>why Choose Us?</h1>
        </div>
        <div class="Feature-box">
            <div class="Features">
                <h1>4 SIMPLE REASONS</h1>
                <p>

                    You have many reasons to buy new clothes or a new dress, but why choose us? We give you 4 simple reasons why you decide on our services. 1-Quality at the best price. We use only the best materials in the elaboration and composure of your garments based
                    on what you have budgeted for this purpose. 2-Committed to our clients. For us, our clients are the most important thing, and that is why we provide the best attention with care and warmth so that you visit us again and again. 3-Combination
                    of technology with the creative mind behind design, make us the best in our field. 4-Using natural products. The world generates 2.01 billion tonnes of garbage annually and clothes are a big part of that. by using our products you
                    help the world cause we recycle them.

                </p>

            </div>
            <div class="Features-img">
                <img src="../img/common/why-us.jpg">
            </div>
        </div>
    </section>

    <!---SERVICE-->
    <section id="Service">
        <div class="title-text">
            <p> SERVIES</p>
            <h1>
                <a href="products.html"> We Provide Better </a>
            </h1>
        </div>

        <div class="Service-box">
            <div class="single-service">
                <img src="../img/common/benefit-comfort.jpg">
                <div class="overlay">
                    <div class="description">
                        <h1>COMFORTABILITY</h1>
                        <hr>

                        <p> we believe that clothes are like the second skin. so we think about comfort as well as being stylish. </p>
                        </a>

                    </div>

                </div>

            </div>
            <div class="single-service">
                <img src="../img/common/benefit-creative.jpg">
                <div class="overlay">
                    <div class="description">
                        <h1>CREATIVE IN DESIGN AND TEXTURE</h1>

                        <hr>

                        <p>we guarantee that our products are unique in design. cure our belief is each story needs a special design.</p>


                    </div>
                </div>
            </div>
            <div class="single-service">
                <img src="../img/common/benefit-ecological.jpg">
                <div class="overlay">
                    <div class="description">
                        <h1>NATURAL AND RECYCLE MATERIALS</h1>
                        <hr>
                        <a href="megacity.html">
                            <p>Our duty is to make the better world by making unique clothes also we have a duty toward our world too. So we can claim our company is one of the leaders in environmentally friendly clothes company.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="single-service">
                <img src="../img/common/benefit-tech.jpg">
                <div class="overlay">
                </div>
                <div class="description">
                    <h1>USING CUTTING-AGE TECHNOLOGY</h1>
                    <hr>
                    <a href="camping.html">
                        <p>Our team use the newes technology in this feild to make the high qualitty clothes for each test. </p>
                    </a>
                </div>
            </div>



    </section>

    <!--testimonial-->
    <section id="testinomial">
        <div class="title-text">
            <p> Comments</p>
            <h1>Clients Comments</h1>
        </div>
        <div class="testimonial-row">

            <div class="testimonial-col">
                <div class="user-info">
                    <h4> Tina</h4>
                </div>
                <p>
                    Once you use it, u definitely addicted to it. The best design and being unique are my favorite advantages in this company. </p>
            </div>

            <div class="testimonial-col">
                <div class="user-info">
                    <h4> Simon</h4>
                </div>
                <p>I am concider about environment, so one of my big worry is earth polution. now I am happy that i din not play a role in that by using this company clothes. </p>
            </div>
            <div class="testimonial-col">
                <div class="user-info">
                    <h4> Jack</h4>
                </div>
                <p>My priority is being comfortable in my clothes cause I spend a lot of time outside. I needed clothes that were comfortable and stylish as well as getting dirty late. I found all that in this clothes company. </p>
            </div>
        </div>

    </section>
    <!--Best-selling products slider-->
    <section>
        <div class="title-text">

            <h1>Our Best Sellers</h1>
            <p>Click Arrow to Swipe</p>
        </div>

        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="../img/common/bs-summer-fashion.jpg" alt="Summer Fashion" style="width:20%;">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>Summer is always so much fun!</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../img/common/bs-chic.jpg" alt="Chic" style="width:20%;">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>
                    </div>

                    <div class="item">
                        <img src="../img/common/bs-elite.jpg" alt="Elite" style="width:20%;">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>Go Big!</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </section>

    <!--Questionnaire-->
    <section>
        <div class="title-text">

            <h1>Questionnare </h1>
            <p> Win Free Shirt by taking our Questionnaire</p>
        </div>
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc0Vi1DGD-ZJb2ZLP2Hj5N58joO4A6avbl4Al7VWe2RYGk53g/viewform?embedded=true" width="640" height="1318" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

    </section>

    <!--FOOTER-->
    <section id="footer">
        <div class="title-text">
            <p> More Information</p>
            <h1>
                <a href="contact.html"> Contact Us</a></h1>
        </div>


        <p id="display"></p>

        </div>

        <div class="footer-right">
            <h1>Contact Us</h1>
            <p>To contact us please click
                <a href="contact.html"> here</a></p>
            <pre>
            More way:
                Tel: +490000000
                whatsApp:+490000000
                <a href="info@example.gmail">Email:info@example.com</a>
            </pre>

        </div>

        </div>

    </section>

    <script src="../scripts/index.js">
    </script>
    <script src="../scripts/cart/local-storage-datasource.js"></script>
    <script src="../scripts/cart/cart-datasource.js"></script>
    <script src="../scripts/navbar.js"></script>


</body>

</html>