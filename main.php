
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Beryl8, be8, analytics, Beryl8-analytics, be8-analytics, Beryl8 analytics, be8 analytics, analytics web">
    <meta name="description" content="Beryl8 analytics main page (be8-analytics main).">
    <?php
    // Start the session
    session_start();
    echo "session_start";
    ?> 
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92797728-1', 'auto');
        ga('send', 'pageview');

        // Feature detects Navigation Timing API support.
        if (window.performance) {
          // Gets the number of milliseconds since page load
          // (and rounds the result since the value must be an integer).
          var timeSincePageLoad = Math.round(performance.now());

          // Sends the timing hit to Google Analytics.
          ga('send', 'timing', 'JS Dependencies', 'load', timeSincePageLoad);
        }

        function signIn() {
            // var signInForm = document.getElementById("signInForm");
            var userId = document.getElementById("userId").value;
            if(userId) {
                ga('set', 'userId', userId);
                document.getElementById("signInForm").style.display = "none";
                document.getElementById("displayUserName").style.display = "block";
                document.getElementById("userIdDisplay").value = userId;
                
                console.log('userId:' + userId);
                
            } else {
                alert('Username cannot be empty');
            }
            
            return false;
        }

        function handleOutboundLinkClicks(event) {
            ga('send', 'event', {
                eventCategory: event.name,
                eventAction: 'click',
                eventLabel: event.target.href
            });
        }

    </script>
    <style type="text/css">
        .footer{
            text-align:center
        }
        .footer a {
            color: #ccc;
            font-size: 80%;
        }
    </style>

    <title>BE8 &ndash; Analytics &ndash; Web</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">

        <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="css/layouts/side-menu.css">
        <!--<![endif]-->
</head>
<body>
<?php
    // Set session variables
    echo "Fuck";
    $doc = new DomDocument;
    $doc->getElementById('php-basics');
    echo '<script>document.getElementById("userIdDisplay").value</script>';
    
?>
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="index.html">Beryl8</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="blog.html" class="pure-menu-link">Blog</a></li>
                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                    <a href="email.html" class="pure-menu-link">Email</a>
                </li>
                <li class="pure-menu-item"><a href="pricing.html" class="pure-menu-link">Pricing</a></li>
            </ul>
        </div>
    </div>

    <div id="main">
        <div>
            <form id="signInForm" class="pure-form" style="text-align: right" onSubmit="return signIn()">
                <fieldset>
                    <input type="text" id="userId" name="userId" placeholder="Username">
                    <button type="submit" class="pure-button pure-button-primary">Sign in</button>
                </fieldset>
            </form>
            <div id="displayUserName" style="text-align: right;display: none; padding: 16px">
                Login as <b><output id="userIdDisplay" for="userId"></output></b>
            </div>
            
        </div>
        <div class="header">
            <h1>Beryl8 Analytics Website</h1>
            <h2>Main Page</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">How to use this layout</h2>
            <p>
                To use this layout, you can just copy paste the HTML, along with the CSS in <a href="/css/layouts/side-menu.css" alt="Side Menu CSS">side-menu.css</a>, and the JavaScript in <a href="/js/ui.js">ui.js</a>. The JS file uses vanilla JavaScript to simply toggle an <code>active</code> class that makes the menu responsive.
            </p>

            <h2 class="content-subhead">Now Let's Speak Some Latin</h2>
            <p>
                Beryl8 analytics website. BE8 Analytics Web. Test be8-analytics. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <div class="pure-g">
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg" alt="Peyto Lake">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2813/9069585985_80da8db54f.jpg" alt="Train">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm6.staticflickr.com/5456/9121446012_c1640e42d0.jpg" alt="T-Shirt Store">
                </div>
                <div class="pure-u-1-4">
                    <img class="pure-img-responsive" src="http://farm8.staticflickr.com/7357/9086701425_fda3024927.jpg" alt="Mountain">
                </div>
            </div>

            <h2 class="content-subhead">Try Resizing your Browser</h2>
            <p>
                Beryl8 analytics website. BE8 Analytics Web. Test be8-analytics. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="footer">
            <div class="pure-menu pure-menu-horizontal">
                <ul>
                    <li class="pure-menu-item"><a name="About Link" href="http://www.beryl8.com/about-beryl8/" class="pure-menu-link">About</a></li>
                    <li class="pure-menu-item"><a name="Twitter Link" href="https://twitter.com/beryl8plus" class="pure-menu-link">Twitter</a></li>
                    <li class="pure-menu-item"><a name="Facebook Link" href="https://www.facebook.com/beryl8plus" class="pure-menu-link">Facebook</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

<script src="js/ui.js"></script>

</body>
</html>
