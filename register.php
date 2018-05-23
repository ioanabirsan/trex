<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en-US">

<head>
    <meta charset="utf-8">

    <meta name="author" content="Birsan Ioana">
    <meta name="author" content="Gensthaler Octavian">
    <meta name="author" content="Loghin L Alexandru">
    <meta name="author" content="Luca Alexandru Gean">
    <meta name="description" content="...">

    <!--  Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/fav-icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/fav-icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/fav-icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/fav-icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/fav-icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/fav-icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/fav-icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/fav-icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/fav-icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/fav-icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/fav-icon/favicon-16x16.png">
    <link rel="manifest" href="images/fav-icon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/fav-icon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,900" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/about-us.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/topics.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/article.css">
    <link rel="stylesheet" href="css/books.css">
    <link rel="stylesheet" href="css/videos.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/notification.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/script.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/books.js"></script>


    <title>TReX</title>
</head>

<body onload="showPage('home');">
    <?php
        if(isset($_SESSION['notification']) && isset($_SESSION['notification_type'])) {
            echo "<div onClick='this.remove()' class='notification notification-".$_SESSION['notification_type']."'>".$_SESSION['notification']."</div>";
            unset($_SESSION['notification']);
            unset($_SESSION['notification_type']);
        }
    ?>


    <!-- start Ioana Birsan -->

    <nav id="menu">
        <div id="option-home" class="menu-option selected-menu-option" onClick="showPage('home'); selectCurrentMenuItem(this);">
            <p>Home</p>
            <i class="fa fa-home"></i>
        </div>
        <div id="option-books" class="menu-option" onClick="showPage('books'); selectCurrentMenuItem(this);">
            <p>Books</p>
            <i class="fa fa-book"></i>
        </div>
        <div id="option-articles" class="menu-option" onClick="showPage('articles'); selectCurrentMenuItem(this);">
            <p>Articles</p>
            <i class="fa fa-newspaper-o"></i>
        </div>
        <div id="option-videos" class="menu-option" onClick="showPage('videos'); selectCurrentMenuItem(this);">
            <p>Videos</p>
            <i class="fa fa-camera"></i>
        </div>
        <div id="option-presentations" class="menu-option" onClick="showPage('presentations'); selectCurrentMenuItem(this);">
            <p>Presentations</p>
            <i class="fa fa-file-powerpoint-o"></i>
        </div>
    </nav>

    <!-- start Octavian Gensthaler -->
    <div class="header header-relative">
        <div class="logo">
            <h2>TReX</h2>
            <p>Topic-based Resource eXplorer.</p>
        </div>

        <div class="user-menu">
            <div class="menu-item"><a href="#"><i class="fa fa-edit"></i> Register</a></div>
            <div class="menu-item"><a href="#"><i class="fa fa-key"></i> Login</a></div>
        </div>

        <div class="nav-menu">
            <div class="menu-item"><a href="#">Home</a></div>
            <div class="menu-item"><a href="#">Echipa noastra</a></div>
            <div class="menu-item"><a href="#">Despre proiect</a></div>
            <div class="menu-item"><a href="#">Contact</a></div>
            <div class="menu-item"><a href="#"><i class="fa fa-search"></i></a></div>
        </div>
    </div>
    <!-- start Octavian Gensthaler -->

    <!-- end Ioana Birsan -->


    <div id="home" class="page">
    <form class="login-form user-form" action="php/form_actions/register_submit.php" method="post">
        <formgroup>
            <input type="text" name="firstName" placeholder="First name" />
        </formgroup>
        <formgroup>
            <input type="text" name="lastName" placeholder="Last name" />
        </formgroup>
        <formgroup>
            <input type="password" name="password" placeholder="Password" />
        </formgroup>
        <formgroup>
            <input type="password" name="passwordRepeat" placeholder="Repeat password" />
        </formgroup>
        <formgroup>
            <input type="text" name="email" placeholder="E-Mail" />
        </formgroup>
        <formgroup>
            <input type="submit" class="submit-button"></input>
        </formgroup>
        
    </form>

    <!-- start Loghin Alexandru -->
    <footer id="main-footer">
        <div>
            <div class="logo">
                <h2>TReX</h2>
                <p>Topic-based Resource eXplorer.</p>
            </div>
            <div id="footer-list">
                <ul>
                    <li>About us</li>
                    <li>Romania</li>
                    <li>Iasi</li>
                    <li>UAIC Informatica</li>
                </ul>
                <ul>
                    <li>Get in Touch</li>
                    <li>facebook</li>
                    <li>instagram</li>
                    <li>twitter</li>
                    <li>email</li>
                </ul>
                <ul>
                    <li>Team members</li>
                    <li>Birsan Ioana</li>
                    <li>Gensthaler Octavian</li>
                    <li>Loghin L Alexandru</li>
                    <li>Luca Alexandru Gean</li>
                </ul>
            </div>

            <p id="footer-copy">&copy; 2018 TReX. All rights reserved.</p>
        </div>
    </footer>
    <!-- end Loghin Alexandru  -->

</body>
</html>
