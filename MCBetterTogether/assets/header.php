<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gelasio:wght@400;700&family=Istok+Web:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS Links -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ResponsiveTopNavDropdown.css" type="text/css">
    <link rel="stylesheet" href="css/glide.core.min.css">
    <link rel="stylesheet" href="css/glide.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Javascripts -->
    <script src="glide.min.js" charset=""utf-8></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="doubletaptogo.min.js" type="text/javascript"></script>
    <script src="js/toggleNav.js" type="text/javascript"></script>
    <!--[if IE]>
        <script src="picturefill.min.js" async="async"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="dist/html5shiv.js"></script>
    <![endif]-->
    <title> Mercer County Better Together</title>
    
</head>
<body>
    <div class="container">
        <header id="header">
            <div class="navbar head" >
                <div class="navbar-container">
                    <a href="index.php" class="logo">
                        <img src="img/MCBT official logo 2023.png" alt="logo">
                    </a>
            
                        <div id="toggleNav" align="center">
                            <a href="#" onclick="toggleNav()">Show/Hide Navigation</a>
                        </div>
                        <nav>
                            <ul class="nav-menu" id="nav", style="display: flex;">
                                <li>
                                    <a class="nav-link" href="about.php">ABOUT</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Our Impact</a></li>
                                        <a href="#">MCBT Partners</a>
                                        <a href="#">Directory</a>
                                    </ul>
                                </li>
                                <li><a class="nav-link" href="projects.php">PROJECTS</a></li>
                                <li><a class="nav-link" href="mccareercenter.php">MC CAREER CENTER</a></li>
                                <li><a class="nav-link" href="news.php">NEWS</a></li>
                                <li><a class="nav-link" href="whymercer.php">WHY MERCER?</a></li>
                                <li><a class="nav-link" href="getinvolved.php">GET INVOLVED</a></li>
                            </ul>
                            <script>
                                $( function()
                                    {
                                        $( '#nav li:has(ul)' ).doubleTapToGo();
                                    });
                            </script>
                        </nav>
                    <!-- </div> -->
                    
                </div>
            </div>
        </header>