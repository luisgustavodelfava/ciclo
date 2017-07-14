<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Outdoor  - Responsive  Photography Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/yourstyle.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--Loader  -->
        <div class="loader"><i class="fa fa-refresh fa-spin"></i></div>
        <!--LOader end  -->
        <!--================= main start ================-->
        <div id="main">
            <!--=============== header ===============-->	
            <header>
                <!-- Header inner  -->
                <div class="header-inner">
                    <!-- Logo  -->
                    <div class="logo-holder">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                    <!--Logo end  -->
                    <!--Navigation  -->
                    <div class="nav-button-holder">
                        <div class="nav-button vis-m"><span></span><span></span><span></span></div>
                    </div>
                    <div class="show-share isShare">Share</div>
                    <div class="nav-holder">
                        <nav>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="about.html">About us </a>
                                </li>
                                <li><a href="contact.html" class="act-link">Contact</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li>
                                    <a>Pages</a>
                                    <ul>
                                        <li>
                                            <a>Home</a>
                                            <ul>
                                                <li><a href="index.html">Slider</a></li>
                                                <li><a href="index2.html">Slideshow</a></li>
                                                <li><a href="index3.html">Multi Slider</a></li>
                                                <li><a href="index4.html">Video</a></li>
                                                <li><a href="index5.html">horizontal</a></li>
                                                <li><a href="index6.html">Image</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="aboutme.html">About me</a></li>
                                        <li><a href="blog-single.html">Blog single</a></li>
                                        <li><a href="contact2.html">Contact 2</a></li>
                                        <li>
                                            <a>Portfolio</a>
                                            <ul>
                                                <li><a href="portfolio.html">horizontal</a></li>
                                                <li><a href="portfolio2.html">Masonry</a></li>
                                                <li><a href="portfolio3.html">Grid 3</a></li>
                                                <li><a href="portfolio4.html">Grid 4</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>Portfolio single</a>
                                            <ul>
                                                <li><a href="portfolio-single.html">Style 1</a></li>
                                                <li><a href="portfolio-single2.html">Style 2</a></li>
                                                <li><a href="portfolio-single3.html">Style 3</a></li>
                                                <li><a href="portfolio-single4.html">Style 4</a></li>
                                                <li><a href="portfolio-single5.html">Style 5</a></li>
                                                <li><a href="portfolio-single6.html">Style 6</a></li>
                                                <li><a href="portfolio-single7.html">Style 7</a></li>
                                                <li><a href="portfolio-single8.html">Style 8</a></li>
                                                <li><a href="portfolio-single9.html">Style 9</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--navigation end -->
                </div>
                <!--Header inner end  -->	
            </header>
            <!--header end -->
            <!--=============== wrapper ===============-->		
           <?php
$org =$_POST['org'] ? urlencode($_POST['org']) : null;
$des =$_POST['des']? urlencode($_POST['des']) : null;
if(isset($_POST['org']) && isset($_POST['des']))
$urlApi = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$org."&destinations=".$des."&language=pt-BR"."&key=AIzaSyBlkUMmijowJcO-1ropgfriCYXRPj7ESrA&mode=bicycling";
$result = file_get_contents($urlApi);
$data   = json_decode($result, true);
{
    
}
?>
<iframe
    width="700"
    height="550"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyBlkUMmijowJcO-1ropgfriCYXRPj7ESrA&origin=<?php echo $org; ?>&destination=<?php echo $des; ?>&mode=bicycling&zoom=14" allowfullscreen>
    
</iframe>

<p>
Origem:
<strong><?php echo $data ['origin_addresses'][0]?></strong>

</p>
<p>
Destino:
<strong><?php echo $data ['destination_addresses'][0]?></strong>

</p>
<p>
Distância:
<strong><?php echo $data ['rows'][0]['elements'][0]['distance']['text']?></strong>

</p>
<p>
Preço entrega:
<strong>
R$
<?php 
$km = $data ['rows'][0]['elements'][0]['distance']['text'] ;
$preco = 2;
$num = floatval(str_replace(",",".", $km));
$calculo = $num*$preco;
echo number_format($calculo,2,'.',"");
?>
</strong>
</p>
<p>
Tempo estimado:
<strong><?php echo $data ['rows'][0]['elements'][0]['duration']['text']?></strong>

</p>
            <!--=============== Footer ===============-->
            <footer>
                <div class="policy-box">
                    <span>&#169; Outdoor 2015 . All rights reserved. </span> 
                    <ul>
                        <li><a href="#">yourmail@domain.com</a></li>
                        <li><a href="#">+7(111)123456789</a></li>
                    </ul>
                </div>
                <!-- footer social -->
                <div class="footer-social">
                    <ul>
                        <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" target="_blank" ><i class="fa fa-tumblr"></i></a></li>
                    </ul>
                </div>
                <!-- footer social end -->
                <div class="to-top"><i class="fa fa-angle-up"></i></div>
            </footer>
            <!-- footer end -->
        </div>
        <!-- Main end -->
        <!--=============== google map ===============-->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" type="text/javascript"></script>
        <!--=============== scripts  ===============-->                
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
        <script type="text/javascript" src="js/map.js"></script>
    </body>
</html>